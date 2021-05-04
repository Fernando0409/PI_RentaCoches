package com.example.drivus;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.Toast;

public class Registro_Genero extends AppCompatActivity {
    RadioButton hombre, mujer;
    Button btnSiguiente;
    String genero_usr;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registro__genero);

        hombre = (RadioButton) findViewById(R.id.rbhombre);
        mujer = (RadioButton) findViewById(R.id.rbmujer);
        btnSiguiente = (Button) findViewById(R.id.btnNext);


        btnSiguiente.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(mujer.isChecked()){
                    genero_usr ="mujer";
                } else if(hombre.isChecked()){
                    genero_usr = "hombre";
                }
                String nombre_usr = getIntent().getStringExtra("nombre(s)_usr_1");
                String ApellidoP_usr = getIntent().getStringExtra("apellidoP_usr_1");
                String ApellidoM_usr = getIntent().getStringExtra("apellidoM_usr_1");
                String fecha_usr = getIntent().getStringExtra("fecha_usr_1");

                Intent telefono_activity = new Intent(Registro_Genero.this,Registro_Telefono.class);
                telefono_activity.putExtra("nombre(s)_usr_2",nombre_usr);
                telefono_activity.putExtra("apellidoP_usr_2",ApellidoP_usr);
                telefono_activity.putExtra("apellidoM_usr_2",ApellidoM_usr);
                telefono_activity.putExtra("fecha_usr_2",fecha_usr);
                telefono_activity.putExtra("genero_usr_2",genero_usr);
                startActivity(telefono_activity);

            }
        });
    }
}