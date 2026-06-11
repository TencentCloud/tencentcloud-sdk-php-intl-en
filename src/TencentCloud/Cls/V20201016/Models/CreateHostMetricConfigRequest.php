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
 * CreateHostMetricConfig request structure.
 *
 * @method string getTopicId() Obtain Metric Topic id
- Get the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1). Note: BizType 0: log topic (default value), 1: metric topic.
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
 * @method void setTopicId(string $TopicId) Set Metric Topic id
- Get the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1). Note: BizType 0: log topic (default value), 1: metric topic.
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
 * @method string getName() Obtain Name

-Length not exceeding 64 characters.
 * @method void setName(string $Name) Set Name

-Length not exceeding 64 characters.
 * @method array getMachineGroupIds() Obtain Machine group id list. Supports up to 100 machine groups.
 * @method void setMachineGroupIds(array $MachineGroupIds) Set Machine group id list. Supports up to 100 machine groups.
 * @method integer getInterval() Obtain Collection frequency. Unit: ms. Minimum support 5000 ms.
 * @method void setInterval(integer $Interval) Set Collection frequency. Unit: ms. Minimum support 5000 ms.
 * @method array getHostMetricItems() Obtain Collection items. Support "cpu", "mem", "net", "disk", "system". **Currently only support: ALL collection items require configuration**.
- cpu:CPU
-mem: memory
-net: Network
-disk
-system
 * @method void setHostMetricItems(array $HostMetricItems) Set Collection items. Support "cpu", "mem", "net", "disk", "system". **Currently only support: ALL collection items require configuration**.
- cpu:CPU
-mem: memory
-net: Network
-disk
-system
 */
class CreateHostMetricConfigRequest extends AbstractModel
{
    /**
     * @var string Metric Topic id
- Get the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1). Note: BizType 0: log topic (default value), 1: metric topic.
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
     */
    public $TopicId;

    /**
     * @var string Name

-Length not exceeding 64 characters.
     */
    public $Name;

    /**
     * @var array Machine group id list. Supports up to 100 machine groups.
     */
    public $MachineGroupIds;

    /**
     * @var integer Collection frequency. Unit: ms. Minimum support 5000 ms.
     */
    public $Interval;

    /**
     * @var array Collection items. Support "cpu", "mem", "net", "disk", "system". **Currently only support: ALL collection items require configuration**.
- cpu:CPU
-mem: memory
-net: Network
-disk
-system
     */
    public $HostMetricItems;

    /**
     * @param string $TopicId Metric Topic id
- Get the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1). Note: BizType 0: log topic (default value), 1: metric topic.
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
     * @param string $Name Name

-Length not exceeding 64 characters.
     * @param array $MachineGroupIds Machine group id list. Supports up to 100 machine groups.
     * @param integer $Interval Collection frequency. Unit: ms. Minimum support 5000 ms.
     * @param array $HostMetricItems Collection items. Support "cpu", "mem", "net", "disk", "system". **Currently only support: ALL collection items require configuration**.
- cpu:CPU
-mem: memory
-net: Network
-disk
-system
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MachineGroupIds",$param) and $param["MachineGroupIds"] !== null) {
            $this->MachineGroupIds = $param["MachineGroupIds"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("HostMetricItems",$param) and $param["HostMetricItems"] !== null) {
            $this->HostMetricItems = [];
            foreach ($param["HostMetricItems"] as $key => $value){
                $obj = new HostMetricItem();
                $obj->deserialize($value);
                array_push($this->HostMetricItems, $obj);
            }
        }
    }
}
