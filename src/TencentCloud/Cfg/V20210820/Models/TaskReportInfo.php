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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Experiment report status information
 *
 * @method integer getStage() Obtain 0: not started; 1: exporting; 2: export successful; 3: export failed.
 * @method void setStage(integer $Stage) Set 0: not started; 1: exporting; 2: export successful; 3: export failed.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getExpirationTime() Obtain End time of the validity period
 * @method void setExpirationTime(string $ExpirationTime) Set End time of the validity period
 * @method boolean getExpired() Obtain Whether it is effective
 * @method void setExpired(boolean $Expired) Set Whether it is effective
 * @method string getCosUrl() Obtain Address of the COS experiment report file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosUrl(string $CosUrl) Set Address of the COS experiment report file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLog() Obtain Experiment report export log
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLog(string $Log) Set Experiment report export log
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskReportInfo extends AbstractModel
{
    /**
     * @var integer 0: not started; 1: exporting; 2: export successful; 3: export failed.
     */
    public $Stage;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string End time of the validity period
     */
    public $ExpirationTime;

    /**
     * @var boolean Whether it is effective
     */
    public $Expired;

    /**
     * @var string Address of the COS experiment report file
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosUrl;

    /**
     * @var string Experiment report export log
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Log;

    /**
     * @param integer $Stage 0: not started; 1: exporting; 2: export successful; 3: export failed.
     * @param string $CreateTime Creation time
     * @param string $ExpirationTime End time of the validity period
     * @param boolean $Expired Whether it is effective
     * @param string $CosUrl Address of the COS experiment report file
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Log Experiment report export log
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
        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            $this->ExpirationTime = $param["ExpirationTime"];
        }

        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }
    }
}
