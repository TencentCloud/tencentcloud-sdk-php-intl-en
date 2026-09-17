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
 * ModifyMediaInfo request structure.
 *
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method integer getClassId() Obtain 
 * @method void setClassId(integer $ClassId) Set 
 * @method string getExpireTime() Obtain 
 * @method void setExpireTime(string $ExpireTime) Set 
 * @method string getCoverData() Obtain 
 * @method void setCoverData(string $CoverData) Set 
 * @method array getAddKeyFrameDescs() Obtain 
 * @method void setAddKeyFrameDescs(array $AddKeyFrameDescs) Set 
 * @method array getDeleteKeyFrameDescs() Obtain 
 * @method void setDeleteKeyFrameDescs(array $DeleteKeyFrameDescs) Set 
 * @method integer getClearKeyFrameDescs() Obtain 
 * @method void setClearKeyFrameDescs(integer $ClearKeyFrameDescs) Set 
 * @method array getAddTags() Obtain 
 * @method void setAddTags(array $AddTags) Set 
 * @method array getDeleteTags() Obtain 
 * @method void setDeleteTags(array $DeleteTags) Set 
 * @method integer getClearTags() Obtain 
 * @method void setClearTags(integer $ClearTags) Set 
 * @method array getAddSubtitles() Obtain 
 * @method void setAddSubtitles(array $AddSubtitles) Set 
 * @method array getDeleteSubtitleIds() Obtain 
 * @method void setDeleteSubtitleIds(array $DeleteSubtitleIds) Set 
 * @method integer getClearSubtitles() Obtain 
 * @method void setClearSubtitles(integer $ClearSubtitles) Set 
 * @method array getDeleteKnowledgeBases() Obtain 
 * @method void setDeleteKnowledgeBases(array $DeleteKnowledgeBases) Set 
 * @method integer getClearKnowledgeBases() Obtain 
 * @method void setClearKnowledgeBases(integer $ClearKnowledgeBases) Set 
 */
class ModifyMediaInfoRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var integer 
     */
    public $ClassId;

    /**
     * @var string 
     */
    public $ExpireTime;

    /**
     * @var string 
     */
    public $CoverData;

    /**
     * @var array 
     */
    public $AddKeyFrameDescs;

    /**
     * @var array 
     */
    public $DeleteKeyFrameDescs;

    /**
     * @var integer 
     */
    public $ClearKeyFrameDescs;

    /**
     * @var array 
     */
    public $AddTags;

    /**
     * @var array 
     */
    public $DeleteTags;

    /**
     * @var integer 
     */
    public $ClearTags;

    /**
     * @var array 
     */
    public $AddSubtitles;

    /**
     * @var array 
     */
    public $DeleteSubtitleIds;

    /**
     * @var integer 
     */
    public $ClearSubtitles;

    /**
     * @var array 
     */
    public $DeleteKnowledgeBases;

    /**
     * @var integer 
     */
    public $ClearKnowledgeBases;

    /**
     * @param string $FileId 
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Description 
     * @param integer $ClassId 
     * @param string $ExpireTime 
     * @param string $CoverData 
     * @param array $AddKeyFrameDescs 
     * @param array $DeleteKeyFrameDescs 
     * @param integer $ClearKeyFrameDescs 
     * @param array $AddTags 
     * @param array $DeleteTags 
     * @param integer $ClearTags 
     * @param array $AddSubtitles 
     * @param array $DeleteSubtitleIds 
     * @param integer $ClearSubtitles 
     * @param array $DeleteKnowledgeBases 
     * @param integer $ClearKnowledgeBases 
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CoverData",$param) and $param["CoverData"] !== null) {
            $this->CoverData = $param["CoverData"];
        }

        if (array_key_exists("AddKeyFrameDescs",$param) and $param["AddKeyFrameDescs"] !== null) {
            $this->AddKeyFrameDescs = [];
            foreach ($param["AddKeyFrameDescs"] as $key => $value){
                $obj = new MediaKeyFrameDescItem();
                $obj->deserialize($value);
                array_push($this->AddKeyFrameDescs, $obj);
            }
        }

        if (array_key_exists("DeleteKeyFrameDescs",$param) and $param["DeleteKeyFrameDescs"] !== null) {
            $this->DeleteKeyFrameDescs = $param["DeleteKeyFrameDescs"];
        }

        if (array_key_exists("ClearKeyFrameDescs",$param) and $param["ClearKeyFrameDescs"] !== null) {
            $this->ClearKeyFrameDescs = $param["ClearKeyFrameDescs"];
        }

        if (array_key_exists("AddTags",$param) and $param["AddTags"] !== null) {
            $this->AddTags = $param["AddTags"];
        }

        if (array_key_exists("DeleteTags",$param) and $param["DeleteTags"] !== null) {
            $this->DeleteTags = $param["DeleteTags"];
        }

        if (array_key_exists("ClearTags",$param) and $param["ClearTags"] !== null) {
            $this->ClearTags = $param["ClearTags"];
        }

        if (array_key_exists("AddSubtitles",$param) and $param["AddSubtitles"] !== null) {
            $this->AddSubtitles = [];
            foreach ($param["AddSubtitles"] as $key => $value){
                $obj = new MediaSubtitleInput();
                $obj->deserialize($value);
                array_push($this->AddSubtitles, $obj);
            }
        }

        if (array_key_exists("DeleteSubtitleIds",$param) and $param["DeleteSubtitleIds"] !== null) {
            $this->DeleteSubtitleIds = $param["DeleteSubtitleIds"];
        }

        if (array_key_exists("ClearSubtitles",$param) and $param["ClearSubtitles"] !== null) {
            $this->ClearSubtitles = $param["ClearSubtitles"];
        }

        if (array_key_exists("DeleteKnowledgeBases",$param) and $param["DeleteKnowledgeBases"] !== null) {
            $this->DeleteKnowledgeBases = $param["DeleteKnowledgeBases"];
        }

        if (array_key_exists("ClearKnowledgeBases",$param) and $param["ClearKnowledgeBases"] !== null) {
            $this->ClearKnowledgeBases = $param["ClearKnowledgeBases"];
        }
    }
}
