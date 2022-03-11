<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of targets and their weights
 *
 * @method string getListenerId() Obtain CLB listener ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTargets() Obtain List of real servers for which to modify the weights
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTargets(array $Targets) Set List of real servers for which to modify the weights
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWeight() Obtain New forwarding weight of the real server. Value range: 0–100.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set New forwarding weight of the real server. Value range: 0–100.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class TargetsWeightRule extends AbstractModel
{
    /**
     * @var string CLB listener ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ListenerId;

    /**
     * @var array List of real servers for which to modify the weights
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Targets;

    /**
     * @var integer New forwarding weight of the real server. Value range: 0–100.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @param string $ListenerId CLB listener ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Targets List of real servers for which to modify the weights
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Weight New forwarding weight of the real server. Value range: 0–100.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Target();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
