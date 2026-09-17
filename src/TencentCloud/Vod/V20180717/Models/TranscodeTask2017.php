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
 * 
 *
 * @method string getTaskId() Obtain 
 * @method void setTaskId(string $TaskId) Set 
 * @method integer getErrCode() Obtain 
 * @method void setErrCode(integer $ErrCode) Set 
 * @method string getMessage() Obtain 
 * @method void setMessage(string $Message) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method string getFileName() Obtain 
 * @method void setFileName(string $FileName) Set 
 * @method integer getDuration() Obtain 
 * @method void setDuration(integer $Duration) Set 
 * @method string getCoverUrl() Obtain 
 * @method void setCoverUrl(string $CoverUrl) Set 
 * @method array getPlayInfoSet() Obtain 
 * @method void setPlayInfoSet(array $PlayInfoSet) Set 
 */
class TranscodeTask2017 extends AbstractModel
{
    /**
     * @var string 
     */
    public $TaskId;

    /**
     * @var integer 
     */
    public $ErrCode;

    /**
     * @var string 
     */
    public $Message;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var string 
     */
    public $FileName;

    /**
     * @var integer 
     */
    public $Duration;

    /**
     * @var string 
     */
    public $CoverUrl;

    /**
     * @var array 
     */
    public $PlayInfoSet;

    /**
     * @param string $TaskId 
     * @param integer $ErrCode 
     * @param string $Message 
     * @param string $FileId 
     * @param string $FileName 
     * @param integer $Duration 
     * @param string $CoverUrl 
     * @param array $PlayInfoSet 
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
