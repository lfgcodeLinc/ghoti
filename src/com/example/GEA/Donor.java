package com.example.GEA;

import android.app.Activity;
import android.os.Bundle;
import android.widget.TextView;

/**
 * Created by keheira on 11/22/14.
 */
public class Donor extends Activity {

    @Override
    protected void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.donor);

        TextView items = (TextView)findViewById(R.id.textView);
        TextView information = (TextView)findViewById(R.id.textView2);

        items.setText("Items");
        information.setText("We are empty and are in need of supplies. All donations are accepted.");
    }
}
