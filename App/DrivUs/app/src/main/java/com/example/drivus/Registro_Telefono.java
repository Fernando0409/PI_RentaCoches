package com.example.drivus;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class Registro_Telefono extends AppCompatActivity {
    EditText etTel_user;
    Button btnSiguiente;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registro_telefono);

        etTel_user = (EditText) findViewById(R.id.editTelefono);
        btnSiguiente = (Button) findViewById(R.id.btnNext);

        btnSiguiente.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                enviando_datos();
            }
        });
    }
    private void enviando_datos(){
        String tel_usr = etTel_user.getText().toString().trim();

        if(tel_usr.isEmpty()){
            etTel_user.setError("Ingrese Telefono");
        } else{
            String nombre_usr = getIntent().getStringExtra("nombre(s)_usr_2");
            String ApellidoP_usr = getIntent().getStringExtra("apellidoP_usr_2");
            String ApellidoM_usr = getIntent().getStringExtra("apellidoM_usr_2");
            String fecha_usr = getIntent().getStringExtra("fecha_usr_2");
            String genero_usr = getIntent().getStringExtra("genero_usr_2");

            Intent email_pestaña = new Intent(Registro_Telefono.this, RegistroFinalUsuarioEmail.class);
            email_pestaña.putExtra("nombre(s)_usr_3",nombre_usr);
            email_pestaña.putExtra("apellidoP_usr_3",ApellidoP_usr);
            email_pestaña.putExtra("apellidoM_usr_3",ApellidoM_usr);
            email_pestaña.putExtra("fecha_usr_3",fecha_usr);
            email_pestaña.putExtra("genero_usr_3",genero_usr);
            email_pestaña.putExtra("tel_usr_3",tel_usr);
            startActivity(email_pestaña);
        }
    }
}