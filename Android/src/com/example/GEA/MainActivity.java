package com.example.GEA;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends Activity {
    /**
     * Called when the activity is first created.
     */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);

        Button donor = (Button)findViewById(R.id.button);
        Button teacher = (Button)findViewById(R.id.button2);

        donor.setText("Donor");
        teacher.setText("Teacher");

        donor.setOnClickListener(new View.OnClickListener() {

            public void onClick(View v) {
                Intent intent = new Intent();
                intent.setAction("com.example.GEA.Donor");
                MainActivity.this.startActivity(intent);
            }
        });

        teacher.setOnClickListener(new View.OnClickListener() {

            public void onClick(View v) {
                Intent intent = new Intent();
                intent.setAction("com.example.GEA.Login");
                MainActivity.this.startActivity(intent);
            }
        });
    }
}
