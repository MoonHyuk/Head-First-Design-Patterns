import Ducks.Duck;
import Ducks.MallardDuck;
import Ducks.ModelDuck;
import FlyBehaviors.FlyRocketPowerd;

public class MiniDuckSimulator {
    public static void main (String[] args) {
        Duck mallard = new MallardDuck();
        mallard.performFly();
        mallard.performQuack();

        Duck model = new ModelDuck();
        model.performFly();

        model.setFlyBehavior(new FlyRocketPowerd());
        model.performFly();
    }
}
