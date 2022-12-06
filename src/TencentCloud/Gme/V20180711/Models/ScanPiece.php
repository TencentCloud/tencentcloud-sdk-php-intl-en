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
 * Voice detection result, which will be returned if `Code` is 0.
 *
 * @method string getDumpUrl() Obtain Audio retention address, which will be returned for stream detection. The audio will be retained for 30 minutes.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDumpUrl(string $DumpUrl) Set Audio retention address, which will be returned for stream detection. The audio will be retained for 30 minutes.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getHitFlag() Obtain Whether non-compliant information is detected
 * @method void setHitFlag(boolean $HitFlag) Set Whether non-compliant information is detected
 * @method string getMainType() Obtain Main non-compliant content type
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setMainType(string $MainType) Set Main non-compliant content type
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getScanDetail() Obtain Voice detection details
 * @method void setScanDetail(array $ScanDetail) Set Voice detection details
 * @method string getRoomId() Obtain GME Voice Chat room ID, which is the `RoomId` passed through when the task was submitted.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRoomId(string $RoomId) Set GME Voice Chat room ID, which is the `RoomId` passed through when the task was submitted.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getOpenId() Obtain GME Voice Chat user ID, which is the `OpenId` passed through when the task was submitted.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setOpenId(string $OpenId) Set GME Voice Chat user ID, which is the `OpenId` passed through when the task was submitted.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getInfo() Obtain Remarks
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInfo(string $Info) Set Remarks
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getOffset() Obtain Offset time of multipart in stream during stream detection (in milliseconds)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setOffset(integer $Offset) Set Offset time of multipart in stream during stream detection (in milliseconds)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getDuration() Obtain Multipart duration during stream detection
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDuration(integer $Duration) Set Multipart duration during stream detection
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getPieceStartTime() Obtain Multipart detection start time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPieceStartTime(integer $PieceStartTime) Set Multipart detection start time
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ScanPiece extends AbstractModel
{
    /**
     * @var string Audio retention address, which will be returned for stream detection. The audio will be retained for 30 minutes.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DumpUrl;

    /**
     * @var boolean Whether non-compliant information is detected
     */
    public $HitFlag;

    /**
     * @var string Main non-compliant content type
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $MainType;

    /**
     * @var array Voice detection details
     */
    public $ScanDetail;

    /**
     * @var string GME Voice Chat room ID, which is the `RoomId` passed through when the task was submitted.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RoomId;

    /**
     * @var string GME Voice Chat user ID, which is the `OpenId` passed through when the task was submitted.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $OpenId;

    /**
     * @var string Remarks
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Info;

    /**
     * @var integer Offset time of multipart in stream during stream detection (in milliseconds)
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Offset;

    /**
     * @var integer Multipart duration during stream detection
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var integer Multipart detection start time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PieceStartTime;

    /**
     * @param string $DumpUrl Audio retention address, which will be returned for stream detection. The audio will be retained for 30 minutes.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $HitFlag Whether non-compliant information is detected
     * @param string $MainType Main non-compliant content type
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $ScanDetail Voice detection details
     * @param string $RoomId GME Voice Chat room ID, which is the `RoomId` passed through when the task was submitted.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $OpenId GME Voice Chat user ID, which is the `OpenId` passed through when the task was submitted.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Info Remarks
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Offset Offset time of multipart in stream during stream detection (in milliseconds)
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Duration Multipart duration during stream detection
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $PieceStartTime Multipart detection start time
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("DumpUrl",$param) and $param["DumpUrl"] !== null) {
            $this->DumpUrl = $param["DumpUrl"];
        }

        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("MainType",$param) and $param["MainType"] !== null) {
            $this->MainType = $param["MainType"];
        }

        if (array_key_exists("ScanDetail",$param) and $param["ScanDetail"] !== null) {
            $this->ScanDetail = [];
            foreach ($param["ScanDetail"] as $key => $value){
                $obj = new ScanDetail();
                $obj->deserialize($value);
                array_push($this->ScanDetail, $obj);
            }
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("PieceStartTime",$param) and $param["PieceStartTime"] !== null) {
            $this->PieceStartTime = $param["PieceStartTime"];
        }
    }
}
