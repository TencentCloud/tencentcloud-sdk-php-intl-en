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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Real-time task synchronization speed Bar/s
 *
 * @method string getNodeType() Obtain Node TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeType(string $NodeType) Set Node TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getNodeName() Obtain Node nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeName(string $NodeName) Set Node nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getValues() Obtain Speed value list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setValues(array $Values) Set Speed value list
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RecordsSpeed extends AbstractModel
{
    /**
     * @var string Node TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeType;

    /**
     * @var string Node nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeName;

    /**
     * @var array Speed value list
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Values;

    /**
     * @param string $NodeType Node TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $NodeName Node nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $Values Speed value list
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = [];
            foreach ($param["Values"] as $key => $value){
                $obj = new SpeedValue();
                $obj->deserialize($value);
                array_push($this->Values, $obj);
            }
        }
    }
}
