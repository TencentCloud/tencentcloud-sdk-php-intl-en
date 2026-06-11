<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric collection configuration in YAML format.
 *
 * @method string getType() Obtain yaml monitoring type.
Support:
- PodMonitor
- ServiceMonitor
- ScrapeConfig
- ScrapeConfig-prometheus

`PodMonitor`, `ServiceMonitor`, `ScrapeConfig` belong to prometheus-operator
`ScrapeConfig-prometheus` belongs to Prometheus
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set yaml monitoring type.
Support:
- PodMonitor
- ServiceMonitor
- ScrapeConfig
- ScrapeConfig-prometheus

`PodMonitor`, `ServiceMonitor`, `ScrapeConfig` belong to prometheus-operator
`ScrapeConfig-prometheus` belongs to Prometheus
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSpec() Obtain Configures the YAML format.
For example: Type: ServiceMonitor


```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: test
  namespace: test
  labels:
    k8s-app1: test
    k8s-app2: test
spec:
  endpoints:
    - interval: 15s
      port: 8080-8080-tcp
      path: /metrics
      relabelings:
        - action: replace
          sourceLabels:
            - __meta_kubernetes_pod_label_app
          targetLabel: application
  namespaceSelector:
    matchNames:
      - test
  selector:
    matchLabels:
      app: test
```
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpec(string $Spec) Set Configures the YAML format.
For example: Type: ServiceMonitor


```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: test
  namespace: test
  labels:
    k8s-app1: test
    k8s-app2: test
spec:
  endpoints:
    - interval: 15s
      port: 8080-8080-tcp
      path: /metrics
      relabelings:
        - action: replace
          sourceLabels:
            - __meta_kubernetes_pod_label_app
          targetLabel: application
  namespaceSelector:
    matchNames:
      - test
  selector:
    matchLabels:
      app: test
```
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MetricYamlSpec extends AbstractModel
{
    /**
     * @var string yaml monitoring type.
Support:
- PodMonitor
- ServiceMonitor
- ScrapeConfig
- ScrapeConfig-prometheus

`PodMonitor`, `ServiceMonitor`, `ScrapeConfig` belong to prometheus-operator
`ScrapeConfig-prometheus` belongs to Prometheus
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Configures the YAML format.
For example: Type: ServiceMonitor


```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: test
  namespace: test
  labels:
    k8s-app1: test
    k8s-app2: test
spec:
  endpoints:
    - interval: 15s
      port: 8080-8080-tcp
      path: /metrics
      relabelings:
        - action: replace
          sourceLabels:
            - __meta_kubernetes_pod_label_app
          targetLabel: application
  namespaceSelector:
    matchNames:
      - test
  selector:
    matchLabels:
      app: test
```
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Spec;

    /**
     * @param string $Type yaml monitoring type.
Support:
- PodMonitor
- ServiceMonitor
- ScrapeConfig
- ScrapeConfig-prometheus

`PodMonitor`, `ServiceMonitor`, `ScrapeConfig` belong to prometheus-operator
`ScrapeConfig-prometheus` belongs to Prometheus
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Spec Configures the YAML format.
For example: Type: ServiceMonitor


```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: test
  namespace: test
  labels:
    k8s-app1: test
    k8s-app2: test
spec:
  endpoints:
    - interval: 15s
      port: 8080-8080-tcp
      path: /metrics
      relabelings:
        - action: replace
          sourceLabels:
            - __meta_kubernetes_pod_label_app
          targetLabel: application
  namespaceSelector:
    matchNames:
      - test
  selector:
    matchLabels:
      app: test
```
Note: This field may return null, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }
    }
}
