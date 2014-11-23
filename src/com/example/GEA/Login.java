package com.example.GEA;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

/**
 * Created by keheira on 11/22/14.
 */
public class Login extends Activity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login);

        EditText name = (EditText)findViewById(R.id.editText);
        EditText pass = (EditText)findViewById(R.id.editText2);
        TextView name2 = (TextView)findViewById(R.id.textView);
        TextView pass2 = (TextView)findViewById(R.id.textView2);
        Button go = (Button)findViewById(R.id.button);

        name2.setText("Username");
        pass2.setText("Password");
        go.setText("Login");
        final String user = name.getText().toString();
        final String password = pass.getText().toString();

        go.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(user != "admin" && password != "admin"){
                    //display in long period of time
                    Toast.makeText(getApplicationContext(), "Incorrect username or password", Toast.LENGTH_LONG).show();
                }
                Intent intent = new Intent();
                intent.setAction("com.example.GEA.Teacher");
                Login.this.startActivity(intent);
            }
        });

    }
}
