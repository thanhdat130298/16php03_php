package com.example.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class Calculator extends AppCompatActivity {
    EditText num1, num2;
    TextView result;
    Button cong, tru, nhan, chia;
    float result_num;
    int n1, n2;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_calculator);
        result=(TextView)findViewById(R.id.result);
        num1= (EditText) findViewById(R.id.num1);
        num2= (EditText) findViewById(R.id.num2);
        cong= (Button) findViewById(R.id.cong);
        tru= (Button) findViewById(R.id.tru);
        nhan= (Button) findViewById(R.id.nhan);
        chia= (Button) findViewById(R.id.chia);
        cong.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int n1=Integer.parseInt(num1.getText().toString());
                int n2=Integer.parseInt(num2.getText().toString());
                result_num = n1 + n2;
                result.setText(String.valueOf(result_num));
            }
        });
        tru.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int n1=Integer.parseInt(num1.getText().toString());
                int n2=Integer.parseInt(num2.getText().toString());
                result_num = n1 - n2;
                result.setText(String.valueOf(result_num));
            }
        });
        nhan.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int n1=Integer.parseInt(num1.getText().toString());
                int n2=Integer.parseInt(num2.getText().toString());
                result_num = n1 * n2;
                result.setText(String.valueOf(result_num));
            }
        });
        chia.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int n1=Integer.parseInt(num1.getText().toString());
                int n2=Integer.parseInt(num2.getText().toString());
                result_num = n1 / n2;
                result.setText(String.valueOf(result_num));
            }
        });

    }
}
