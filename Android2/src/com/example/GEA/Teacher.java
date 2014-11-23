package com.example.GEA;

import android.app.Activity;
import android.os.Bundle;
import android.widget.ImageView;
import android.widget.TextView;

/**
 * Created by keheira on 11/22/14.
 */
public class Teacher extends Activity {

    @Override
    protected void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.teacher);

        TextView t = (TextView)findViewById(R.id.textView);
        TextView t2 = (TextView)findViewById(R.id.textView2);
        TextView t3 = (TextView)findViewById(R.id.textView3);
        TextView t4 = (TextView)findViewById(R.id.textView4);
        TextView t5 = (TextView)findViewById(R.id.textView5);
        TextView t6 = (TextView)findViewById(R.id.textView6);
        TextView t7 = (TextView)findViewById(R.id.textView7);
        TextView t8 = (TextView)findViewById(R.id.textView8);
        TextView t9 = (TextView)findViewById(R.id.textView9);
        TextView t10 = (TextView)findViewById(R.id.textView10);


        TextView t11 = (TextView)findViewById(R.id.textView11);
        TextView t12 = (TextView)findViewById(R.id.textView12);
        TextView t13 = (TextView)findViewById(R.id.textView13);
        TextView t14 = (TextView)findViewById(R.id.textView14);
        TextView t15 = (TextView)findViewById(R.id.textView15);
        TextView t16 = (TextView)findViewById(R.id.textView16);
        TextView t17 = (TextView)findViewById(R.id.textView17);
        TextView t18 = (TextView)findViewById(R.id.textView18);
        TextView t19 = (TextView)findViewById(R.id.textView19);
        TextView t20 = (TextView)findViewById(R.id.textView20);

        t.setText("pencils");
        t2.setText("spiral notebooks");
        t3.setText("calculators");
        t4.setText("markers");
        t5.setText("rulers");
        t6.setText("folders");
        t7.setText("glue");
        t8.setText("crayons");
        t9.setText("binders");
        t10.setText("loose leaf paper");
        t11.setText("Quanity");
        t12.setText("Quanity");
        t13.setText("Quanity");
        t14.setText("Quanity");
        t15.setText("Quanity");
        t16.setText("Quanity");
        t17.setText("Quanity");
        t18.setText("Quanity");
        t19.setText("Quanity");
        t20.setText("Quanity");
    }
}
