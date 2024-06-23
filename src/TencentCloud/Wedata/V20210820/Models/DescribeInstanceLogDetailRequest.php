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
 * DescribeInstanceLogDetail request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getCurRunDate() Obtain Data Timestamp
 * @method void setCurRunDate(string $CurRunDate) Set Data Timestamp
 * @method string getBrokerIp() Obtain Server Ip
 * @method void setBrokerIp(string $BrokerIp) Set Server Ip
 * @method string getOriginFileName() Obtain File Name
 * @method void setOriginFileName(string $OriginFileName) Set File Name
 * @method integer getStartCount() Obtain Starting Row
 * @method void setStartCount(integer $StartCount) Set Starting Row
 * @method integer getLineCount() Obtain Number of Rows Per Query
 * @method void setLineCount(integer $LineCount) Set Number of Rows Per Query
 */
class DescribeInstanceLogDetailRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Data Timestamp
     */
    public $CurRunDate;

    /**
     * @var string Server Ip
     */
    public $BrokerIp;

    /**
     * @var string File Name
     */
    public $OriginFileName;

    /**
     * @var integer Starting Row
     */
    public $StartCount;

    /**
     * @var integer Number of Rows Per Query
     */
    public $LineCount;

    /**
     * @param string $ProjectId Project ID
     * @param string $TaskId Task ID
     * @param string $CurRunDate Data Timestamp
     * @param string $BrokerIp Server Ip
     * @param string $OriginFileName File Name
     * @param integer $StartCount Starting Row
     * @param integer $LineCount Number of Rows Per Query
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }

        if (array_key_exists("StartCount",$param) and $param["StartCount"] !== null) {
            $this->StartCount = $param["StartCount"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }
    }
}
