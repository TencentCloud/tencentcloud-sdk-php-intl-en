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
 * Resource scheduling - configuration set information.
 *
 * @method string getConfigSet() Obtain Configuration set name.
 * @method void setConfigSet(string $ConfigSet) Set Configuration set name.
 * @method array getLabelParams() Obtain The capacity scheduler will use it, where tag-related configuration is set. The key values are consistent with the fields returned by **DescribeYarnQueue**.
The key values are as follows:
- labelName: Tag name, that is, tags in tag management.
- capacity: Capacity. The value is a **numeric string**.
- maximum-capacity: Maximum capacity. The value is a **numeric string**.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabelParams(array $LabelParams) Set The capacity scheduler will use it, where tag-related configuration is set. The key values are consistent with the fields returned by **DescribeYarnQueue**.
The key values are as follows:
- labelName: Tag name, that is, tags in tag management.
- capacity: Capacity. The value is a **numeric string**.
- maximum-capacity: Maximum capacity. The value is a **numeric string**.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBasicParams() Obtain Set parameters related to the configuration set. The key values are consistent with the fields returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key values are as follows:
- minResources: Minimum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxResources: Maximum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxChildResources: Maximum resource amount for undeclared subqueues. The value is a **numeric string** or **null**.
- maxRunningApps: Maximum number of apps that can run concurrently. The value is a **numeric string** or **null**.
- weight: weight. The value is a **numeric string** or **null**.
- maxAMShare: Maximum App Master share. The value is a **numeric string** or **null**, where the number range is [0,1] or -1.

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // The value can be percent or null. When the value is percent, it indicates the percentage used; otherwise, the absolute value used is indicated. The value can be percent only for maxResources and maxChildResources.
}
```

###### Capacity scheduler.
The key values are as follows:
- minimum-user-limit-percent: Minimum user capacity. The value is a **JSON string of the YarnResource type** or **null**, where the number range is [0,100].
- user-limit-factor: User resource factor. The value is a **JSON string of the YarnResource type** or **null**.
- maximum-applications: Maximum number of applications, that is, Max-Applications. The value is a **numeric string** or **null**, where the numbers must be positive integers.
- maximum-am-resource-percent: maximum AM percent. The value is a **numeric string** or **null**, where the number range is [0,1] or -1.
- default-application-priority: Resource pool priority. The value is a **numeric string** or **null**, where the numbers must be positive integers.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBasicParams(array $BasicParams) Set Set parameters related to the configuration set. The key values are consistent with the fields returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key values are as follows:
- minResources: Minimum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxResources: Maximum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxChildResources: Maximum resource amount for undeclared subqueues. The value is a **numeric string** or **null**.
- maxRunningApps: Maximum number of apps that can run concurrently. The value is a **numeric string** or **null**.
- weight: weight. The value is a **numeric string** or **null**.
- maxAMShare: Maximum App Master share. The value is a **numeric string** or **null**, where the number range is [0,1] or -1.

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // The value can be percent or null. When the value is percent, it indicates the percentage used; otherwise, the absolute value used is indicated. The value can be percent only for maxResources and maxChildResources.
}
```

###### Capacity scheduler.
The key values are as follows:
- minimum-user-limit-percent: Minimum user capacity. The value is a **JSON string of the YarnResource type** or **null**, where the number range is [0,100].
- user-limit-factor: User resource factor. The value is a **JSON string of the YarnResource type** or **null**.
- maximum-applications: Maximum number of applications, that is, Max-Applications. The value is a **numeric string** or **null**, where the numbers must be positive integers.
- maximum-am-resource-percent: maximum AM percent. The value is a **numeric string** or **null**, where the number range is [0,1] or -1.
- default-application-priority: Resource pool priority. The value is a **numeric string** or **null**, where the numbers must be positive integers.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConfigSetInfo extends AbstractModel
{
    /**
     * @var string Configuration set name.
     */
    public $ConfigSet;

    /**
     * @var array The capacity scheduler will use it, where tag-related configuration is set. The key values are consistent with the fields returned by **DescribeYarnQueue**.
The key values are as follows:
- labelName: Tag name, that is, tags in tag management.
- capacity: Capacity. The value is a **numeric string**.
- maximum-capacity: Maximum capacity. The value is a **numeric string**.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LabelParams;

    /**
     * @var array Set parameters related to the configuration set. The key values are consistent with the fields returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key values are as follows:
- minResources: Minimum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxResources: Maximum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxChildResources: Maximum resource amount for undeclared subqueues. The value is a **numeric string** or **null**.
- maxRunningApps: Maximum number of apps that can run concurrently. The value is a **numeric string** or **null**.
- weight: weight. The value is a **numeric string** or **null**.
- maxAMShare: Maximum App Master share. The value is a **numeric string** or **null**, where the number range is [0,1] or -1.

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // The value can be percent or null. When the value is percent, it indicates the percentage used; otherwise, the absolute value used is indicated. The value can be percent only for maxResources and maxChildResources.
}
```

###### Capacity scheduler.
The key values are as follows:
- minimum-user-limit-percent: Minimum user capacity. The value is a **JSON string of the YarnResource type** or **null**, where the number range is [0,100].
- user-limit-factor: User resource factor. The value is a **JSON string of the YarnResource type** or **null**.
- maximum-applications: Maximum number of applications, that is, Max-Applications. The value is a **numeric string** or **null**, where the numbers must be positive integers.
- maximum-am-resource-percent: maximum AM percent. The value is a **numeric string** or **null**, where the number range is [0,1] or -1.
- default-application-priority: Resource pool priority. The value is a **numeric string** or **null**, where the numbers must be positive integers.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BasicParams;

    /**
     * @param string $ConfigSet Configuration set name.
     * @param array $LabelParams The capacity scheduler will use it, where tag-related configuration is set. The key values are consistent with the fields returned by **DescribeYarnQueue**.
The key values are as follows:
- labelName: Tag name, that is, tags in tag management.
- capacity: Capacity. The value is a **numeric string**.
- maximum-capacity: Maximum capacity. The value is a **numeric string**.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BasicParams Set parameters related to the configuration set. The key values are consistent with the fields returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key values are as follows:
- minResources: Minimum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxResources: Maximum resource amount. The value is a **JSON string of the YarnResource type** or **null**.
- maxChildResources: Maximum resource amount for undeclared subqueues. The value is a **numeric string** or **null**.
- maxRunningApps: Maximum number of apps that can run concurrently. The value is a **numeric string** or **null**.
- weight: weight. The value is a **numeric string** or **null**.
- maxAMShare: Maximum App Master share. The value is a **numeric string** or **null**, where the number range is [0,1] or -1.

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // The value can be percent or null. When the value is percent, it indicates the percentage used; otherwise, the absolute value used is indicated. The value can be percent only for maxResources and maxChildResources.
}
```

###### Capacity scheduler.
The key values are as follows:
- minimum-user-limit-percent: Minimum user capacity. The value is a **JSON string of the YarnResource type** or **null**, where the number range is [0,100].
- user-limit-factor: User resource factor. The value is a **JSON string of the YarnResource type** or **null**.
- maximum-applications: Maximum number of applications, that is, Max-Applications. The value is a **numeric string** or **null**, where the numbers must be positive integers.
- maximum-am-resource-percent: maximum AM percent. The value is a **numeric string** or **null**, where the number range is [0,1] or -1.
- default-application-priority: Resource pool priority. The value is a **numeric string** or **null**, where the numbers must be positive integers.
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
