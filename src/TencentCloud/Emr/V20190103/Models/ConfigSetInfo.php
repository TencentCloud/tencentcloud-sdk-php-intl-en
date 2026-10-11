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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration set information in resource scheduling.
 *
 * @method string getConfigSet() Obtain Configuration set name.
 * @method void setConfigSet(string $ConfigSet) Set Configuration set name.
 * @method array getLabelParams() Obtain The capacity scheduler uses it to configure label-related settings. The value of key is consistent with the field returned by **DescribeYarnQueue**.
The key value information is as follows:
- labelName: label name, which is the label in label management.
- capacity: capacity. The value is a **numeric string**.
- maximum-capacity: maximum capacity. The value is a **numeric string**.
 * @method void setLabelParams(array $LabelParams) Set The capacity scheduler uses it to configure label-related settings. The value of key is consistent with the field returned by **DescribeYarnQueue**.
The key value information is as follows:
- labelName: label name, which is the label in label management.
- capacity: capacity. The value is a **numeric string**.
- maximum-capacity: maximum capacity. The value is a **numeric string**.
 * @method array getBasicParams() Obtain Sets the parameters related to the configuration set. The value of key is consistent with the field returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key value information is as follows:
- minResources: minimum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxResources: maximum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxChildResources: maximum resource amount that can be allocated to undeclared subqueues. The value is a **numeric string** or **null**.
- maxRunningApps: maximum number of apps that can run simultaneously. The value is a **numeric string** or **null**.
- weight: weight. The value is a **numeric string** or **null**.
- maxAMShare: maximum share of the App Master. The value is a **numeric string** or **null**, where the numeric range is [0, 1] or -1.

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // The value is `percent` or `null`. When the value is `percent`, it indicates the percentage used; otherwise, it is the absolute value used. Only maxResources and maxChildResources can be set to `percent`.
}
```

###### Capacity scheduler.
The key value information is as follows:
- minimum-user-limit-percent: minimum user capacity. The value is a **JSON string of the YarnResource type** or **null**, where the numeric range is [0, 100].
- user-limit-factor: user resource factor. The value is a **JSON string of the YarnResource type** or **null**.
- maximum-applications: maximum number of applications (Max-Applications). The value is a **numeric string** or **null**, where the number is a positive integer.
- maximum-am-resource-percent: maximum AM ratio. The value is a **numeric string** or **null**, where the numeric range is [0, 1] or -1.
- default-application-priority: resource pool priority. The value is a **numeric string** or **null**, where the number is a positive integer.
 * @method void setBasicParams(array $BasicParams) Set Sets the parameters related to the configuration set. The value of key is consistent with the field returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key value information is as follows:
- minResources: minimum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxResources: maximum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxChildResources: maximum resource amount that can be allocated to undeclared subqueues. The value is a **numeric string** or **null**.
- maxRunningApps: maximum number of apps that can run simultaneously. The value is a **numeric string** or **null**.
- weight: weight. The value is a **numeric string** or **null**.
- maxAMShare: maximum share of the App Master. The value is a **numeric string** or **null**, where the numeric range is [0, 1] or -1.

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // The value is `percent` or `null`. When the value is `percent`, it indicates the percentage used; otherwise, it is the absolute value used. Only maxResources and maxChildResources can be set to `percent`.
}
```

###### Capacity scheduler.
The key value information is as follows:
- minimum-user-limit-percent: minimum user capacity. The value is a **JSON string of the YarnResource type** or **null**, where the numeric range is [0, 100].
- user-limit-factor: user resource factor. The value is a **JSON string of the YarnResource type** or **null**.
- maximum-applications: maximum number of applications (Max-Applications). The value is a **numeric string** or **null**, where the number is a positive integer.
- maximum-am-resource-percent: maximum AM ratio. The value is a **numeric string** or **null**, where the numeric range is [0, 1] or -1.
- default-application-priority: resource pool priority. The value is a **numeric string** or **null**, where the number is a positive integer.
 */
class ConfigSetInfo extends AbstractModel
{
    /**
     * @var string Configuration set name.
     */
    public $ConfigSet;

    /**
     * @var array The capacity scheduler uses it to configure label-related settings. The value of key is consistent with the field returned by **DescribeYarnQueue**.
The key value information is as follows:
- labelName: label name, which is the label in label management.
- capacity: capacity. The value is a **numeric string**.
- maximum-capacity: maximum capacity. The value is a **numeric string**.
     */
    public $LabelParams;

    /**
     * @var array Sets the parameters related to the configuration set. The value of key is consistent with the field returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key value information is as follows:
- minResources: minimum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxResources: maximum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxChildResources: maximum resource amount that can be allocated to undeclared subqueues. The value is a **numeric string** or **null**.
- maxRunningApps: maximum number of apps that can run simultaneously. The value is a **numeric string** or **null**.
- weight: weight. The value is a **numeric string** or **null**.
- maxAMShare: maximum share of the App Master. The value is a **numeric string** or **null**, where the numeric range is [0, 1] or -1.

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // The value is `percent` or `null`. When the value is `percent`, it indicates the percentage used; otherwise, it is the absolute value used. Only maxResources and maxChildResources can be set to `percent`.
}
```

###### Capacity scheduler.
The key value information is as follows:
- minimum-user-limit-percent: minimum user capacity. The value is a **JSON string of the YarnResource type** or **null**, where the numeric range is [0, 100].
- user-limit-factor: user resource factor. The value is a **JSON string of the YarnResource type** or **null**.
- maximum-applications: maximum number of applications (Max-Applications). The value is a **numeric string** or **null**, where the number is a positive integer.
- maximum-am-resource-percent: maximum AM ratio. The value is a **numeric string** or **null**, where the numeric range is [0, 1] or -1.
- default-application-priority: resource pool priority. The value is a **numeric string** or **null**, where the number is a positive integer.
     */
    public $BasicParams;

    /**
     * @param string $ConfigSet Configuration set name.
     * @param array $LabelParams The capacity scheduler uses it to configure label-related settings. The value of key is consistent with the field returned by **DescribeYarnQueue**.
The key value information is as follows:
- labelName: label name, which is the label in label management.
- capacity: capacity. The value is a **numeric string**.
- maximum-capacity: maximum capacity. The value is a **numeric string**.
     * @param array $BasicParams Sets the parameters related to the configuration set. The value of key is consistent with the field returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key value information is as follows:
- minResources: minimum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxResources: maximum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxChildResources: maximum resource amount that can be allocated to undeclared subqueues. The value is a **numeric string** or **null**.
- maxRunningApps: maximum number of apps that can run simultaneously. The value is a **numeric string** or **null**.
- weight: weight. The value is a **numeric string** or **null**.
- maxAMShare: maximum share of the App Master. The value is a **numeric string** or **null**, where the numeric range is [0, 1] or -1.

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // The value is `percent` or `null`. When the value is `percent`, it indicates the percentage used; otherwise, it is the absolute value used. Only maxResources and maxChildResources can be set to `percent`.
}
```

###### Capacity scheduler.
The key value information is as follows:
- minimum-user-limit-percent: minimum user capacity. The value is a **JSON string of the YarnResource type** or **null**, where the numeric range is [0, 100].
- user-limit-factor: user resource factor. The value is a **JSON string of the YarnResource type** or **null**.
- maximum-applications: maximum number of applications (Max-Applications). The value is a **numeric string** or **null**, where the number is a positive integer.
- maximum-am-resource-percent: maximum AM ratio. The value is a **numeric string** or **null**, where the numeric range is [0, 1] or -1.
- default-application-priority: resource pool priority. The value is a **numeric string** or **null**, where the number is a positive integer.
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
        if (array_key_exists("ConfigSet",$param) and $param["ConfigSet"] !== null) {
            $this->ConfigSet = $param["ConfigSet"];
        }

        if (array_key_exists("LabelParams",$param) and $param["LabelParams"] !== null) {
            $this->LabelParams = [];
            foreach ($param["LabelParams"] as $key => $value){
                $obj = new ItemSeq();
                $obj->deserialize($value);
                array_push($this->LabelParams, $obj);
            }
        }

        if (array_key_exists("BasicParams",$param) and $param["BasicParams"] !== null) {
            $this->BasicParams = [];
            foreach ($param["BasicParams"] as $key => $value){
                $obj = new Item();
                $obj->deserialize($value);
                array_push($this->BasicParams, $obj);
            }
        }
    }
}
