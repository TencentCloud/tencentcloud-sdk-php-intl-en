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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The details of a video transcoding task. This parameter is only valid for tasks initiated by the v2017 video transcoding API.
 *
 * @method string getTaskId() Obtain Transcoding task ID.
 * @method void setTaskId(string $TaskId) Set Transcoding task ID.
 * @method integer getErrCode() Obtain Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrCode(integer $ErrCode) Set Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileId() Obtain ID of transcoded file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileId(string $FileId) Set ID of transcoded file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileName() Obtain Name of transcoded file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileName(string $FileName) Set Name of transcoded file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDuration() Obtain Video duration in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(integer $Duration) Set Video duration in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCoverUrl() Obtain Cover address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCoverUrl(string $CoverUrl) Set Cover address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getPlayInfoSet() Obtain Playback information generated after video transcoding.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPlayInfoSet(array $PlayInfoSet) Set Playback information generated after video transcoding.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class TranscodeTask2017 extends AbstractModel
{
    /**
     * @var string Transcoding task ID.
     */
    public $TaskId;

    /**
     * @var integer Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrCode;

    /**
     * @var string Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string ID of transcoded file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileId;

    /**
     * @var string Name of transcoded file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileName;

    /**
     * @var integer Video duration in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var string Cover address.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CoverUrl;

    /**
     * @var array Playback information generated after video transcoding.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PlayInfoSet;

    /**
     * @param string $TaskId Transcoding task ID.
     * @param integer $ErrCode Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Message Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileId ID of transcoded file.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileName Name of transcoded file.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Duration Video duration in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CoverUrl Cover address.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $PlayInfoSet Playback information generated after video transcoding.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("PlayInfoSet",$param) and $param["PlayInfoSet"] !== null) {
            $this->PlayInfoSet = [];
            foreach ($param["PlayInfoSet"] as $key => $value){
                $obj = new TranscodePlayInfo2017();
                $obj->deserialize($value);
                array_push($this->PlayInfoSet, $obj);
            }
        }
    }
}
