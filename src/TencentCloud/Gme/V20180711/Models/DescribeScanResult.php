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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned voice detection result
 *
 * @method integer getCode() Obtain Business return code
 * @method void setCode(integer $Code) Set Business return code
 * @method string getDataId() Obtain Unique data ID
 * @method void setDataId(string $DataId) Set Unique data ID
 * @method integer getScanFinishTime() Obtain Detection completion timestamp
 * @method void setScanFinishTime(integer $ScanFinishTime) Set Detection completion timestamp
 * @method boolean getHitFlag() Obtain Whether non-compliant information is detected
 * @method void setHitFlag(boolean $HitFlag) Set Whether non-compliant information is detected
 * @method boolean getLive() Obtain Whether it is a stream
 * @method void setLive(boolean $Live) Set Whether it is a stream
 * @method string getMsg() Obtain Business return description
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setMsg(string $Msg) Set Business return description
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getScanPiece() Obtain Detection result, which will be returned if `Code` is 0
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setScanPiece(array $ScanPiece) Set Detection result, which will be returned if `Code` is 0
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getScanStartTime() Obtain Detection task submission timestamp
 * @method void setScanStartTime(integer $ScanStartTime) Set Detection task submission timestamp
 * @method array getScenes() Obtain Voice detection scenario, which corresponds to the `Scene` at the time of request
 * @method void setScenes(array $Scenes) Set Voice detection scenario, which corresponds to the `Scene` at the time of request
 * @method string getTaskId() Obtain Voice detection task ID, which is assigned by the backend
 * @method void setTaskId(string $TaskId) Set Voice detection task ID, which is assigned by the backend
 * @method string getUrl() Obtain File or stream address
 * @method void setUrl(string $Url) Set File or stream address
 * @method string getStatus() Obtain Detection task execution result status. Valid values:
<li>Start: Task started</li>
<li>Success: Task ended successfully</li>
<li>Error: An exception occurs</li>
 * @method void setStatus(string $Status) Set Detection task execution result status. Valid values:
<li>Start: Task started</li>
<li>Success: Task ended successfully</li>
<li>Error: An exception occurs</li>
 * @method integer getBizId() Obtain ID of the application submitted for detection
 * @method void setBizId(integer $BizId) Set ID of the application submitted for detection
 */
class DescribeScanResult extends AbstractModel
{
    /**
     * @var integer Business return code
     */
    public $Code;

    /**
     * @var string Unique data ID
     */
    public $DataId;

    /**
     * @var integer Detection completion timestamp
     */
    public $ScanFinishTime;

    /**
     * @var boolean Whether non-compliant information is detected
     */
    public $HitFlag;

    /**
     * @var boolean Whether it is a stream
     */
    public $Live;

    /**
     * @var string Business return description
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Msg;

    /**
     * @var array Detection result, which will be returned if `Code` is 0
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ScanPiece;

    /**
     * @var integer Detection task submission timestamp
     */
    public $ScanStartTime;

    /**
     * @var array Voice detection scenario, which corresponds to the `Scene` at the time of request
     */
    public $Scenes;

    /**
     * @var string Voice detection task ID, which is assigned by the backend
     */
    public $TaskId;

    /**
     * @var string File or stream address
     */
    public $Url;

    /**
     * @var string Detection task execution result status. Valid values:
<li>Start: Task started</li>
<li>Success: Task ended successfully</li>
<li>Error: An exception occurs</li>
     */
    public $Status;

    /**
     * @var integer ID of the application submitted for detection
     */
    public $BizId;

    /**
     * @param integer $Code Business return code
     * @param string $DataId Unique data ID
     * @param integer $ScanFinishTime Detection completion timestamp
     * @param boolean $HitFlag Whether non-compliant information is detected
     * @param boolean $Live Whether it is a stream
     * @param string $Msg Business return description
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $ScanPiece Detection result, which will be returned if `Code` is 0
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ScanStartTime Detection task submission timestamp
     * @param array $Scenes Voice detection scenario, which corresponds to the `Scene` at the time of request
     * @param string $TaskId Voice detection task ID, which is assigned by the backend
     * @param string $Url File or stream address
     * @param string $Status Detection task execution result status. Valid values:
<li>Start: Task started</li>
<li>Success: Task ended successfully</li>
<li>Error: An exception occurs</li>
     * @param integer $BizId ID of the application submitted for detection
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("ScanFinishTime",$param) and $param["ScanFinishTime"] !== null) {
            $this->ScanFinishTime = $param["ScanFinishTime"];
        }

        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("Live",$param) and $param["Live"] !== null) {
            $this->Live = $param["Live"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("ScanPiece",$param) and $param["ScanPiece"] !== null) {
            $this->ScanPiece = [];
            foreach ($param["ScanPiece"] as $key => $value){
                $obj = new ScanPiece();
                $obj->deserialize($value);
                array_push($this->ScanPiece, $obj);
            }
        }

        if (array_key_exists("ScanStartTime",$param) and $param["ScanStartTime"] !== null) {
            $this->ScanStartTime = $param["ScanStartTime"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }
    }
}
