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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video transcoding task information. This structure is only used for tasks initiated via the 2017 [video transcoding](https://www.tencentcloud.com/document/product/266/7822?from_cn_redirect=1) API.
 *
 * @method string getTaskId() Obtain Transcoding task ID.
 * @method void setTaskId(string $TaskId) Set Transcoding task ID.
 * @method integer getErrCode() Obtain Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method string getFileId() Obtain Transcoded file ID.
 * @method void setFileId(string $FileId) Set Transcoded file ID.
 * @method string getFileName() Obtain Name of the transcoded file.
 * @method void setFileName(string $FileName) Set Name of the transcoded file.
 * @method integer getDuration() Obtain Video duration, in seconds.
 * @method void setDuration(integer $Duration) Set Video duration, in seconds.
 * @method string getCoverUrl() Obtain Address of a cover.
 * @method void setCoverUrl(string $CoverUrl) Set Address of a cover.
 * @method array getPlayInfoSet() Obtain Playback information generated after video transcoding.
 * @method void setPlayInfoSet(array $PlayInfoSet) Set Playback information generated after video transcoding.
 */
class TranscodeTask2017 extends AbstractModel
{
    /**
     * @var string Transcoding task ID.
     */
    public $TaskId;

    /**
     * @var integer Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var string Transcoded file ID.
     */
    public $FileId;

    /**
     * @var string Name of the transcoded file.
     */
    public $FileName;

    /**
     * @var integer Video duration, in seconds.
     */
    public $Duration;

    /**
     * @var string Address of a cover.
     */
    public $CoverUrl;

    /**
     * @var array Playback information generated after video transcoding.
     */
    public $PlayInfoSet;

    /**
     * @param string $TaskId Transcoding task ID.
     * @param integer $ErrCode Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
     * @param string $Message Error message.
     * @param string $FileId Transcoded file ID.
     * @param string $FileName Name of the transcoded file.
     * @param integer $Duration Video duration, in seconds.
     * @param string $CoverUrl Address of a cover.
     * @param array $PlayInfoSet Playback information generated after video transcoding.
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
