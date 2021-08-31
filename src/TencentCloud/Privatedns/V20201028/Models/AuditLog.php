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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operation log
 *
 * @method string getResource() Obtain Log type
 * @method void setResource(string $Resource) Set Log type
 * @method string getMetric() Obtain Log table name
 * @method void setMetric(string $Metric) Set Log table name
 * @method integer getTotalCount() Obtain Total number of logs
 * @method void setTotalCount(integer $TotalCount) Set Total number of logs
 * @method array getDataSet() Obtain List of logs
 * @method void setDataSet(array $DataSet) Set List of logs
 */
class AuditLog extends AbstractModel
{
    /**
     * @var string Log type
     */
    public $Resource;

    /**
     * @var string Log table name
     */
    public $Metric;

    /**
     * @var integer Total number of logs
     */
    public $TotalCount;

    /**
     * @var array List of logs
     */
    public $DataSet;

    /**
     * @param string $Resource Log type
     * @param string $Metric Log table name
     * @param integer $TotalCount Total number of logs
     * @param array $DataSet List of logs
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DataSet",$param) and $param["DataSet"] !== null) {
            $this->DataSet = [];
            foreach ($param["DataSet"] as $key => $value){
                $obj = new AuditLogInfo();
                $obj->deserialize($value);
                array_push($this->DataSet, $obj);
            }
        }
    }
}
