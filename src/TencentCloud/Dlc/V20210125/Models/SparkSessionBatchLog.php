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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Running logs of a Spark SQL batch job
 *
 * @method string getStep() Obtain The log step. Valid values: `BEG`, `CS`, `DS`, `DSS`, `DSF`, `FINF`, `RTO`, `CANCEL`, `CT`, `DT`, `DTS`, `DTF`, `FINT`, and `EXCE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStep(string $Step) Set The log step. Valid values: `BEG`, `CS`, `DS`, `DSS`, `DSF`, `FINF`, `RTO`, `CANCEL`, `CT`, `DT`, `DTS`, `DTF`, `FINT`, and `EXCE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTime() Obtain Time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTime(string $Time) Set Time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain The log message.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set The log message.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOperate() Obtain The operation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperate(array $Operate) Set The operation.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SparkSessionBatchLog extends AbstractModel
{
    /**
     * @var string The log step. Valid values: `BEG`, `CS`, `DS`, `DSS`, `DSF`, `FINF`, `RTO`, `CANCEL`, `CT`, `DT`, `DTS`, `DTF`, `FINT`, and `EXCE`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Step;

    /**
     * @var string Time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Time;

    /**
     * @var string The log message.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var array The operation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Operate;

    /**
     * @param string $Step The log step. Valid values: `BEG`, `CS`, `DS`, `DSS`, `DSF`, `FINF`, `RTO`, `CANCEL`, `CT`, `DT`, `DTS`, `DTF`, `FINT`, and `EXCE`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Time Time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Message The log message.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Operate The operation.
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
        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = [];
            foreach ($param["Operate"] as $key => $value){
                $obj = new SparkSessionBatchLogOperate();
                $obj->deserialize($value);
                array_push($this->Operate, $obj);
            }
        }
    }
}
