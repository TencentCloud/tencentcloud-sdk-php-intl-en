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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configurations of sending slow and error logs of a CDB instance to CLS.
 *
 * @method string getStatus() Obtain Delivery status on or turn off
 * @method void setStatus(string $Status) Set Delivery status on or turn off
 * @method string getLogSetId() Obtain CLS Logset ID
 * @method void setLogSetId(string $LogSetId) Set CLS Logset ID
 * @method string getLogTopicId() Obtain Log topic ID
 * @method void setLogTopicId(string $LogTopicId) Set Log topic ID
 * @method string getClsRegion() Obtain Region of the CLS service
 * @method void setClsRegion(string $ClsRegion) Set Region of the CLS service
 */
class LogToCLSConfig extends AbstractModel
{
    /**
     * @var string Delivery status on or turn off
     */
    public $Status;

    /**
     * @var string CLS Logset ID
     */
    public $LogSetId;

    /**
     * @var string Log topic ID
     */
    public $LogTopicId;

    /**
     * @var string Region of the CLS service
     */
    public $ClsRegion;

    /**
     * @param string $Status Delivery status on or turn off
     * @param string $LogSetId CLS Logset ID
     * @param string $LogTopicId Log topic ID
     * @param string $ClsRegion Region of the CLS service
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }
    }
}
