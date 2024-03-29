package com.example.prp.fragment;

import android.net.Uri;
import android.os.Bundle;
//import android.support.v4.app.Fragment;
import android.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Spinner;

import com.example.prp.R;

/**
 * A simple {@link Fragment} subclass.
 * Activities that contain this fragment must implement the
 * {@link FragmentZvoView.OnFragmentInteractionListener} interface
 * to handle interaction events.
 * Use the {@link FragmentZvoView#newInstance} factory method to
 * create an instance of this fragment.
 */
public class FragmentZvoView extends Fragment {
    // TODO: Rename parameter arguments, choose names that match
    // the fragment initialization parameters, e.g. ARG_ITEM_NUMBER
    private static final String ARG_PARAM1 = "param1";
    private static final String ARG_PARAM2 = "param2";

    // TODO: Rename and change types of parameters
    private String mParam1;
    private String mParam2;


    private OnFragmentInteractionListener mListener;

    //MY FIELDS
    String[] areaValues = {
            "Вінницька",
            "Волинська",
            "Дніпропетровська",
            "Донецька",
            "Житомирська",
            "Закарпатська",
            "Запорізька",
            "Івано-Франківська",
            "Київська",
            "Кіровоградська",
            "Луганська",
            "Львівська",
            "Миколавївська",
            "Одеська",
            "Полтавська",
            "Рівненська",
            "Сумська",
            "Тернопілська",
            "Харківська",
            "Херсонська",
            "Хмельницька",
            "Черкаська",
            "Чернігівська",
            "Чернівецька"
    };
    String[][] townValues = {
            {"Вінниця"},
            {"Волинь"},
            {"Дніпро", "ААА"},
            {"Донецьк"},
            {"Житомир"},
            {"Закарпаття"},
            {"Запоріжжя"},
            {"Івано-Франківськ"},
            {"Київ", "Бориспіль"},
            {"Кіровоград"},
            {"Луганськ"},
            {"Львів"},
            {"Миколаїв"},
            {"Одеса"},
            {"Полтава"},
            {"Рівне"},
            {"Суми"},
            {"Тернопіль"},
            {"Харків", "Ізюм", "Чугуїв"},
            {"Херсон"},
            {"Хмельницький"},
            {"Черкаси"},
            {"Чернігів"},
            {"Чернівці"}
    };

    Spinner areaSpinner;
    Spinner townSpinner;
    ArrayAdapter<String> areaAdapter;
    ArrayAdapter<String> townAdapter; /* = new ArrayAdapter<>(getActivity(), android.R.layout.simple_list_item_1, townValues);*/







    public FragmentZvoView() {
        // Required empty public constructor
    }

    /**
     * Use this factory method to create a new instance of
     * this fragment using the provided parameters.
     *
     * @param param1 Parameter 1.
     * @param param2 Parameter 2.
     * @return A new instance of fragment FragmentZvoView.
     */
    // TODO: Rename and change types and number of parameters
    public static FragmentZvoView newInstance(String param1, String param2) {
        FragmentZvoView fragment = new FragmentZvoView();
        Bundle args = new Bundle();
        args.putString(ARG_PARAM1, param1);
        args.putString(ARG_PARAM2, param2);
        fragment.setArguments(args);
        return fragment;
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        if (getArguments() != null) {
            mParam1 = getArguments().getString(ARG_PARAM1);
            mParam2 = getArguments().getString(ARG_PARAM2);
        }

    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        //a
        final View v = inflater.inflate(R.layout.fragment_fragment_zvo_view, container, false);

        areaSpinner = (Spinner)v.findViewById(R.id.areaSpinner);

        areaAdapter = new ArrayAdapter<>(this.getActivity(), android.R.layout.simple_spinner_item, areaValues);
        areaAdapter.setDropDownViewResource(android.R.layout.simple_dropdown_item_1line);
        areaSpinner.setAdapter(areaAdapter);

        areaSpinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
                townSpinner = (Spinner)v.findViewById(R.id.townSpinner);
                townAdapter = new ArrayAdapter<>(v.getContext(), android.R.layout.simple_spinner_item, townValues[position]);
                townAdapter.setDropDownViewResource(android.R.layout.simple_dropdown_item_1line);

                townSpinner.setAdapter(townAdapter);

            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }
        });

        /*areaSpinner = (Spinner)v.findViewById(R.id.areaSpinner);
        townSpinner = (Spinner)v.findViewById(R.id.townSpinner);

        ArrayAdapter<String> adapter = new ArrayAdapter<>(this.getActivity(), android.R.layout.simple_spinner_item, areaValues);

        adapter.setDropDownViewResource(android.R.layout.simple_dropdown_item_1line);
        areaSpinner.setAdapter(adapter);
        //a

        areaSpinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
                townAdapter = new ArrayAdapter<>(getActivity(), android.R.layout.simple_list_item_1, townValues[position]);
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }
        });
        /*areaSpinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
                String item = (String)parent.getItemAtPosition(position);
                Spinner townSpinner = view.findViewById(R.id.townSpinner);
                ArrayAdapter<String> adapter = new ArrayAdapter<>(parent.getContext(), android.R.layout.simple_spinner_item, item);
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }
        });*/



        return v;


    }

    // TODO: Rename method, update argument and hook method into UI event
    public void onButtonPressed(Uri uri) {
        if (mListener != null) {
            mListener.onFragmentInteraction(uri);
        }
    }

    //@Override
/*    public void onAttach(Context context) {
        super.onAttach(context);
        if (context instanceof OnFragmentInteractionListener) {
            mListener = (OnFragmentInteractionListener) context;
        } else {
            throw new RuntimeException(context.toString()
                    + " must implement OnFragmentInteractionListener");
        }
    }
*/
    @Override
    public void onDetach() {
        super.onDetach();
        mListener = null;
    }

    /**
     * This interface must be implemented by activities that contain this
     * fragment to allow an interaction in this fragment to be communicated
     * to the activity and potentially other fragments contained in that
     * activity.
     * <p>
     * See the Android Training lesson <a href=
     * "http://developer.android.com/training/basics/fragments/communicating.html"
     * >Communicating with Other Fragments</a> for more information.
     */
    public interface OnFragmentInteractionListener {
        // TODO: Update argument type and name
        void onFragmentInteraction(Uri uri);
    }
}
