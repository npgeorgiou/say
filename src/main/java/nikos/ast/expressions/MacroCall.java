package nikos.ast.expressions;

import nikos.ast.Node;

import java.util.ArrayList;

public class MacroCall extends Node {
    public ArrayList<Node> expressions = new ArrayList<>();

    public MacroCall() {

    }
}
