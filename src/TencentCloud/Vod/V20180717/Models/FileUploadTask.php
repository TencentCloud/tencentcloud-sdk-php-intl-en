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
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method MediaBasicInfo getMediaBasicInfo() Obtain 
 * @method void setMediaBasicInfo(MediaBasicInfo $MediaBasicInfo) Set 
 * @method string getProcedureTaskId() Obtain 
 * @method void setProcedureTaskId(string $ProcedureTaskId) Set 
 * @method string getReviewAudioVideoTaskId() Obtain 
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) Set 
 * @method MediaMetaData getMetaData() Obtain 
 * @method void setMetaData(MediaMetaData $MetaData) Set 
 */
class FileUploadTask extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var MediaBasicInfo 
     */
    public $MediaBasicInfo;

    /**
     * @var string 
     */
    public $ProcedureTaskId;

    /**
     * @var string 
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @var MediaMetaData 
     */
    public $MetaData;

    /**
     * @param string $FileId 
     * @param MediaBasicInfo $MediaBasicInfo 
     * @param string $ProcedureTaskId 
     * @param string $ReviewAudioVideoTaskId 
     * @param MediaMetaData $MetaData 
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaBasicInfo",$param) and $param["MediaBasicInfo"] !== null) {
            $this->MediaBasicInfo = new MediaBasicInfo();
            $this->MediaBasicInfo->deserialize($param["MediaBasicInfo"]);
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }

        if (array_key_exists("ReviewAudioVideoTaskId",$param) and $param["ReviewAudioVideoTaskId"] !== null) {
            $this->ReviewAudioVideoTaskId = $param["ReviewAudioVideoTaskId"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
