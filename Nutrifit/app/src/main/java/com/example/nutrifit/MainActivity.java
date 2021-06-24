package com.example.nutrifit;

import androidx.appcompat.app.AppCompatActivity;

import android.app.Activity;
import android.content.Context;
import android.os.Bundle;
import android.view.View;
import android.view.inputmethod.InputMethodManager;
import android.webkit.WebView;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends Activity implements View.OnClickListener {
    WebView ourBrowser;
    EditText url;
    Button go, go_Back, go_Forward, refresh, clr_History;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        ourBrowser = (WebView) findViewById(R.id.WVBrowser);
        /* WebView Settings pretty important */
        ourBrowser.getSettings().setJavaScriptEnabled(true);
        ourBrowser.getSettings().setLoadWithOverviewMode(true);
        ourBrowser.getSettings().setUseWideViewPort(true);

        ourBrowser.setWebViewClient(new ourViewClient());
        try {
            ourBrowser.loadUrl("http://143.198.98.137");
        } catch (Exception e) {
            e.printStackTrace();
        }

        go = (Button) findViewById(R.id.btn_Go);
        go_Back = (Button) findViewById(R.id.btn_GoBack);
        go_Forward = (Button) findViewById(R.id.btn_GoForward);
        refresh = (Button) findViewById(R.id.btn_RefreshPage);
        clr_History = (Button) findViewById(R.id.btn_ClrHistory);
        url = (EditText) findViewById(R.id.eT_webbrowser);

        go.setOnClickListener(this);
        go_Back.setOnClickListener(this);
        go_Forward.setOnClickListener(this);
        refresh.setOnClickListener(this);
        clr_History.setOnClickListener(this);

    }

    @Override
    public void onClick(View view) {
        switch (view.getId()) {
            case R.id.btn_Go:
                String newWebaddress = url.getText().toString();
                ourBrowser.loadUrl(newWebaddress);

                /* Hiding the keyboard after the EditText data */
                InputMethodManager ipmm = (InputMethodManager) getSystemService(Context.INPUT_METHOD_SERVICE);
                ipmm.hideSoftInputFromWindow(url.getWindowToken(), 0);
                break;

            case R.id.btn_GoBack:
                if (ourBrowser.canGoBack()) {
                    ourBrowser.goBack();
                }
                break;

            case R.id.btn_GoForward:
                if (ourBrowser.canGoForward()) {
                    ourBrowser.goForward();
                }
                break;

            case R.id.btn_RefreshPage:
                ourBrowser.reload();
                break;

            case R.id.btn_ClrHistory:
                ourBrowser.clearHistory();
                break;
        }
    }
}