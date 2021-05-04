package com.example.drivus;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

public class RegistroFinalUsuarioEmail extends AppCompatActivity {
    EditText etEmail, etPassword, etPasswordConfirm;
    Button bnConfirmar;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registro_final_usuario_email);

        etEmail = (EditText) findViewById(R.id.editEmail);
        etPassword = (EditText) findViewById(R.id.editPassword);
        etPasswordConfirm = (EditText) findViewById(R.id.editPasswordConfirm);
        bnConfirmar = (Button) findViewById(R.id.btnEnviar);

        bnConfirmar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                ingresar_datos("http://192.168.1.71/drivus_app_php/registro_ususarios.php");
            }
        });
    }
    private void ingresar_datos(String URL) {
        String etUser_Email = etEmail.getText().toString().trim();
        String etUser_password = etPassword.getText().toString().trim();
        String etUser_password_confirm = etPasswordConfirm.getText().toString().trim();

        if (etUser_Email.isEmpty()) {
            etEmail.setError("Ingresa Email");
        } else if (etUser_password.isEmpty()) {
            etPassword.setError("Ingresa Contraseña");
        } else if (etUser_password_confirm.isEmpty()) {
            etPasswordConfirm.setError("Compruebe Contraseña");
        } else {
            if (etUser_password.equals(etUser_password_confirm)) {
                String nombre_usr = getIntent().getStringExtra("nombre(s)_usr_3");
                String ApellidoP_usr = getIntent().getStringExtra("apellidoP_usr_3");
                String ApellidoM_usr = getIntent().getStringExtra("apellidoM_usr_3");
                String fecha_usr = getIntent().getStringExtra("fecha_usr_3");
                String genero_usr = getIntent().getStringExtra("genero_usr_3");
                String telefono_usr = getIntent().getStringExtra("tel_usr_3");

                StringRequest respuesta = new StringRequest(Request.Method.GET, URL, new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        Toast.makeText(RegistroFinalUsuarioEmail.this, "USUARIO REGISTRADO", Toast.LENGTH_LONG).show();
                    }
                }, new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Toast.makeText(RegistroFinalUsuarioEmail.this, error.toString(), Toast.LENGTH_LONG).show();
                    }
                }) {
                    @Override
                    protected Map<String, String> getParams() throws AuthFailureError {
                        Map<String, String> parametros = new HashMap<String, String>();
                        parametros.put("nombre", nombre_usr);
                        parametros.put("apellidop", ApellidoP_usr);
                        parametros.put("apellidom", ApellidoM_usr);
                        parametros.put("fecha_nac", fecha_usr);
                        parametros.put("genero", genero_usr);
                        parametros.put("telefono", telefono_usr);
                        parametros.put("correo", etUser_Email);
                        parametros.put("contraseña", etUser_password);
                        return parametros;
                    }
                };
                RequestQueue requestQueue = Volley.newRequestQueue(this);
                requestQueue.add(respuesta);
            } else {
                Toast.makeText(RegistroFinalUsuarioEmail.this, "No coincide las contraseñas", Toast.LENGTH_LONG).show();
            }
        }
    }
}