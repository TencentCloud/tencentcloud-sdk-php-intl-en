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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos storage bucket task information
 *
 * @method integer getAppId() Obtain <p>appid</p>
 * @method void setAppId(integer $AppId) Set <p>appid</p>
 * @method string getBucketName() Obtain <p>Bucket name</p>
 * @method void setBucketName(string $BucketName) Set <p>Bucket name</p>
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method integer getLastScanTime() Obtain <p>Last scan time</p>
 * @method void setLastScanTime(integer $LastScanTime) Set <p>Last scan time</p>
 * @method integer getIdentifyFileCount() Obtain <p>Number of recognized files</p>
 * @method void setIdentifyFileCount(integer $IdentifyFileCount) Set <p>Number of recognized files</p>
 * @method integer getSensitiveFileCount() Obtain <p>Number of sensitive files</p>
 * @method void setSensitiveFileCount(integer $SensitiveFileCount) Set <p>Number of sensitive files</p>
 */
class CosBucketTaskInfo extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>Bucket name</p>
     */
    public $BucketName;

    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var integer <p>Last scan time</p>
     */
    public $LastScanTime;

    /**
     * @var integer <p>Number of recognized files</p>
     */
    public $IdentifyFileCount;

    /**
     * @var integer <p>Number of sensitive files</p>
     */
    public $SensitiveFileCount;

    /**
     * @param integer $AppId <p>appid</p>
     * @param string $BucketName <p>Bucket name</p>
     * @param string $TaskId <p>Task ID.</p>
     * @param integer $LastScanTime <p>Last scan time</p>
     * @param integer $IdentifyFileCount <p>Number of recognized files</p>
     * @param integer $SensitiveFileCount <p>Number of sensitive files</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("IdentifyFileCount",$param) and $param["IdentifyFileCount"] !== null) {
            $this->IdentifyFileCount = $param["IdentifyFileCount"];
        }

        if (array_key_exists("SensitiveFileCount",$param) and $param["SensitiveFileCount"] !== null) {
            $this->SensitiveFileCount = $param["SensitiveFileCount"];
        }
    }
}
