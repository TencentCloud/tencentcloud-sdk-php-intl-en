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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operation information in the logs of a Spark SQL batch job
 *
 * @method string getText() Obtain The operation message.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setText(string $Text) Set The operation message.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperate() Obtain The operation type. Valid values: `COPY`, `LOG`, `UI`, `RESULT`, `List`, and `TAB`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperate(string $Operate) Set The operation type. Valid values: `COPY`, `LOG`, `UI`, `RESULT`, `List`, and `TAB`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSupplement() Obtain Additional information, such as taskid, sessionid, and sparkui.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupplement(array $Supplement) Set Additional information, such as taskid, sessionid, and sparkui.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SparkSessionBatchLogOperate extends AbstractModel
{
    /**
     * @var string The operation message.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Text;

    /**
     * @var string The operation type. Valid values: `COPY`, `LOG`, `UI`, `RESULT`, `List`, and `TAB`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Operate;

    /**
     * @var array Additional information, such as taskid, sessionid, and sparkui.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Supplement;

    /**
     * @param string $Text The operation message.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Operate The operation type. Valid values: `COPY`, `LOG`, `UI`, `RESULT`, `List`, and `TAB`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Supplement Additional information, such as taskid, sessionid, and sparkui.
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("Supplement",$param) and $param["Supplement"] !== null) {
            $this->Supplement = [];
            foreach ($param["Supplement"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Supplement, $obj);
            }
        }
    }
}
