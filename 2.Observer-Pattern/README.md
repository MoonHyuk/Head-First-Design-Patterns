# 2. Observer Pattern (옵저버 패턴)
## 2.1.1 요구사항

`WeatherData` 객체는 기상 스테이션의 습도, 온도, 압력 센서로부터 데이터를 취득한다.
데이터가 바뀔 때 마다 현재 조건(습도, 온도, 압력)을 보여주는 디스플레이, 기상 통계 디스플레이, 기상 예보 디스플레이가 업데이트 되도록
`WeatherData` 객체의 `measurementsChanged()` 메소드를 구현해야 한다.

## 2.1.2 첫 설계
우선은 대충 다음과 같이 만들었다.
```java
public class WeatherData {
    // ...
    
    public void measurementsChanged() {
        
        float temp = getTemperature();
        float humidity = getHumidity();
        float pressure = getPressure();
        
        currentConditionsDisplay.update(temp, humidity, pressure); // 현재 조건 디스플레이 업데이트
        statisticsDisplay.update(temp, humidity, pressure); // 통계 디스플레이 업데이트
        forecastDisplay.update(temp, humidity, pressure); // 예보 디스플레이 업데이트
    }
}
```

## 2.1.3 첫 설계의 문제점
1. 새로운 디스플레이 항목이 추가될 때마다 코드를 변경해야 한다.
2. 실행중에 디스플레이 항목을 추가/제거할 수 없다.

만약 사용자의 설정에 따라 어떤 디스플레이는 안보이게 하고싶다면?
보이지 않는 디스플레이는 업데이트 하지 않아도 된다.

만약 새로운 디스플레이가 생겨야 한다면?

## 2.2.1 옵저버 패턴이란?
옵저버 패턴에서는 한 객체(subject)의 상태가 바뀌면 그 객체에 의존하는 다른 객체들(observers)한테 연락이 가고 자동으로 내용이 갱신되는 방식으로 일대다 의존성을 정의한다.

예) 신문사(subject)와 구독자들(observers), 헤드헌터(subject)와 구직자들(observers)

