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

        items.setText("Inventory Status");
        String msg = "We are empty and are in need of the following supplies: \n\n\n Pencils \n Spiral Notebook paper \n Markers \n Glue \n Crayons";
        information.setText(msg);
    }
}
