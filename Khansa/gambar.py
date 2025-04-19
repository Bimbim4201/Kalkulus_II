# Create a new directed graph for (a) and ensure proper saving
diagram = Digraph("Logic_Circuits", format="png")
diagram.attr(rankdir="LR", size="12,8")

# Diagram for (a) f(x, y, z) = Σ(2, 3, 6, 7)
with diagram.subgraph(name="cluster_a") as a:
    a.attr(label="(a) f(x, y, z) = Σ(2, 3, 6, 7)")
    # NOT gates for inputs
    a.node("NOT_X_a", "NOT", shape="invtriangle")
    a.node("NOT_Y_a", "NOT", shape="invtriangle")
    a.node("NOT_Z_a", "NOT", shape="invtriangle")
    # AND gates for minterms
    a.node("AND1_a", "AND", shape="circle")
    a.node("AND2_a", "AND", shape="circle")
    a.node("AND3_a", "AND", shape="circle")
    a.node("AND4_a", "AND", shape="circle")
    # OR gate for final output
    a.node("OR_a", "OR", shape="circle")

    # Connect inputs to NOT gates
    a.edge("x", "NOT_X_a")
    a.edge("y", "NOT_Y_a")
    a.edge("z", "NOT_Z_a")

    # Connect inputs and NOT gates to AND gates
    a.edges([("NOT_X_a", "AND1_a"), ("y", "AND1_a"), ("NOT_Z_a", "AND1_a")])  # AND1 for minterm 2
    a.edges([("NOT_X_a", "AND2_a"), ("y", "AND2_a"), ("z", "AND2_a")])       # AND2 for minterm 3
    a.edges([("x", "AND3_a"), ("y", "AND3_a"), ("NOT_Z_a", "AND3_a")])       # AND3 for minterm 6
    a.edges([("x", "AND4_a"), ("y", "AND4_a"), ("z", "AND4_a")])             # AND4 for minterm 7

    # Connect AND gates to OR gate
    a.edges([("AND1_a", "OR_a"), ("AND2_a", "OR_a"), ("AND3_a", "OR_a"), ("AND4_a", "OR_a")])

# Re-render the logic circuit diagram for (a)
file_path = "/mnt/data/logic_circuit_a_v2.png"
diagram.render(file_path, format="png", cleanup=True)

file_path
