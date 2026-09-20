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
 * @method string getFileId() Obtain <p>Media file unique identifier.</p>
 * @method void setFileId(string $FileId) Set <p>Media file unique identifier.</p>
 * @method integer getSubAppId() Obtain <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method string getName() Obtain <p>Media filename, up to 64 characters.</p>
 * @method void setName(string $Name) Set <p>Media filename, up to 64 characters.</p>
 * @method string getDescription() Obtain <p>Media file description, up to 128 characters.</p>
 * @method void setDescription(string $Description) Set <p>Media file description, up to 128 characters.</p>
 * @method integer getClassId() Obtain <p>Media File Category ID.</p>
 * @method void setClassId(integer $ClassId) Set <p>Media File Category ID.</p>
 * @method string getExpireTime() Obtain <p>Media file expiry time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. "9999-12-31T23:59:59Z" means it never expires. After expiry, the media file and its related resources (transcoding results, sprites) will be permanently deleted.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Media file expiry time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. "9999-12-31T23:59:59Z" means it never expires. After expiry, the media file and its related resources (transcoding results, sprites) will be permanently deleted.</p>
 * @method string getCoverData() Obtain <p>Base64-encoded string of the video cover image file (for example, jpeg, png), only supports gif, jpeg, and png image formats.</p>
 * @method void setCoverData(string $CoverData) Set <p>Base64-encoded string of the video cover image file (for example, jpeg, png), only supports gif, jpeg, and png image formats.</p>
 * @method array getAddKeyFrameDescs() Obtain <p>Newly added set of video timestamp information. If a timestamp already exists at a certain offset, an overlay operation will be performed. A single media file can have up to 100 timestamp entries. In the same request, the time offset parameters of AddKeyFrameDescs must all be different from those of DeleteKeyFrameDescs.</p>
 * @method void setAddKeyFrameDescs(array $AddKeyFrameDescs) Set <p>Newly added set of video timestamp information. If a timestamp already exists at a certain offset, an overlay operation will be performed. A single media file can have up to 100 timestamp entries. In the same request, the time offset parameters of AddKeyFrameDescs must all be different from those of DeleteKeyFrameDescs.</p>
 * @method array getDeleteKeyFrameDescs() Obtain <p>Time offset of the video timestamp information set to be deleted, unit: seconds. In the same request, the time offset parameter of AddKeyFrameDescs must be different from that of DeleteKeyFrameDescs.</p>
 * @method void setDeleteKeyFrameDescs(array $DeleteKeyFrameDescs) Set <p>Time offset of the video timestamp information set to be deleted, unit: seconds. In the same request, the time offset parameter of AddKeyFrameDescs must be different from that of DeleteKeyFrameDescs.</p>
 * @method integer getClearKeyFrameDescs() Obtain <p>The value 1 means to clear video dotting information. Other values are meaningless.<br>In the same request, ClearKeyFrameDescs and AddKeyFrameDescs cannot appear simultaneously.</p>
 * @method void setClearKeyFrameDescs(integer $ClearKeyFrameDescs) Set <p>The value 1 means to clear video dotting information. Other values are meaningless.<br>In the same request, ClearKeyFrameDescs and AddKeyFrameDescs cannot appear simultaneously.</p>
 * @method array getAddTags() Obtain <p>A newly-added group of tags. The maximum for a single media file is 16 tags, and a single tag can contain up to 32 characters. In the same request, the AddTags parameter must be different from DeleteTags.</p>
 * @method void setAddTags(array $AddTags) Set <p>A newly-added group of tags. The maximum for a single media file is 16 tags, and a single tag can contain up to 32 characters. In the same request, the AddTags parameter must be different from DeleteTags.</p>
 * @method array getDeleteTags() Obtain <p>A set of tags to delete. In the same request, the AddTags parameter must be all different from DeleteTags.</p>
 * @method void setDeleteTags(array $DeleteTags) Set <p>A set of tags to delete. In the same request, the AddTags parameter must be all different from DeleteTags.</p>
 * @method integer getClearTags() Obtain <p>The value 1 means to clear all tags of the media file. Other values are meaningless.<br>In the same request, ClearTags and AddTags cannot appear simultaneously.</p>
 * @method void setClearTags(integer $ClearTags) Set <p>The value 1 means to clear all tags of the media file. Other values are meaningless.<br>In the same request, ClearTags and AddTags cannot appear simultaneously.</p>
 * @method array getAddSubtitles() Obtain <p>Add a set of subtitles. The maximum for a single media file is 16 subtitles. In the same request, the subtitle IDs specified in AddSubtitles must all be different from DeleteSubtitleIds.</p>
 * @method void setAddSubtitles(array $AddSubtitles) Set <p>Add a set of subtitles. The maximum for a single media file is 16 subtitles. In the same request, the subtitle IDs specified in AddSubtitles must all be different from DeleteSubtitleIds.</p>
 * @method array getDeleteSubtitleIds() Obtain <p>Unique identifier of subtitle to be deleted. In the same request, the subtitle id specified in AddSubtitles must be different from all DeleteSubtitleIds.</p>
 * @method void setDeleteSubtitleIds(array $DeleteSubtitleIds) Set <p>Unique identifier of subtitle to be deleted. In the same request, the subtitle id specified in AddSubtitles must be different from all DeleteSubtitleIds.</p>
 * @method integer getClearSubtitles() Obtain <p>The value 1 means to clear all subtitle information of the media file. Other values are meaningless.<br>In the same request, ClearSubtitles and AddSubtitles cannot appear simultaneously.</p>
 * @method void setClearSubtitles(integer $ClearSubtitles) Set <p>The value 1 means to clear all subtitle information of the media file. Other values are meaningless.<br>In the same request, ClearSubtitles and AddSubtitles cannot appear simultaneously.</p>
 * @method array getDeleteKnowledgeBases() Obtain <p>ID of the knowledge base to be outbound.</p>
 * @method void setDeleteKnowledgeBases(array $DeleteKnowledgeBases) Set <p>ID of the knowledge base to be outbound.</p>
 * @method integer getClearKnowledgeBases() Obtain <p>Value 1 means removing this media file from ALL knowledge bases, other values meaningless.</p><p><br>In the same request, ClearKnowledgeBases and DeleteKnowledgeBases cannot appear simultaneously.<p></p></p>
 * @method void setClearKnowledgeBases(integer $ClearKnowledgeBases) Set <p>Value 1 means removing this media file from ALL knowledge bases, other values meaningless.</p><p><br>In the same request, ClearKnowledgeBases and DeleteKnowledgeBases cannot appear simultaneously.<p></p></p>
 */
class ModifyMediaInfoRequest extends AbstractModel
{
    /**
     * @var string <p>Media file unique identifier.</p>
     */
    public $FileId;

    /**
     * @var integer <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Media filename, up to 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Media file description, up to 128 characters.</p>
     */
    public $Description;

    /**
     * @var integer <p>Media File Category ID.</p>
     */
    public $ClassId;

    /**
     * @var string <p>Media file expiry time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. "9999-12-31T23:59:59Z" means it never expires. After expiry, the media file and its related resources (transcoding results, sprites) will be permanently deleted.</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>Base64-encoded string of the video cover image file (for example, jpeg, png), only supports gif, jpeg, and png image formats.</p>
     */
    public $CoverData;

    /**
     * @var array <p>Newly added set of video timestamp information. If a timestamp already exists at a certain offset, an overlay operation will be performed. A single media file can have up to 100 timestamp entries. In the same request, the time offset parameters of AddKeyFrameDescs must all be different from those of DeleteKeyFrameDescs.</p>
     */
    public $AddKeyFrameDescs;

    /**
     * @var array <p>Time offset of the video timestamp information set to be deleted, unit: seconds. In the same request, the time offset parameter of AddKeyFrameDescs must be different from that of DeleteKeyFrameDescs.</p>
     */
    public $DeleteKeyFrameDescs;

    /**
     * @var integer <p>The value 1 means to clear video dotting information. Other values are meaningless.<br>In the same request, ClearKeyFrameDescs and AddKeyFrameDescs cannot appear simultaneously.</p>
     */
    public $ClearKeyFrameDescs;

    /**
     * @var array <p>A newly-added group of tags. The maximum for a single media file is 16 tags, and a single tag can contain up to 32 characters. In the same request, the AddTags parameter must be different from DeleteTags.</p>
     */
    public $AddTags;

    /**
     * @var array <p>A set of tags to delete. In the same request, the AddTags parameter must be all different from DeleteTags.</p>
     */
    public $DeleteTags;

    /**
     * @var integer <p>The value 1 means to clear all tags of the media file. Other values are meaningless.<br>In the same request, ClearTags and AddTags cannot appear simultaneously.</p>
     */
    public $ClearTags;

    /**
     * @var array <p>Add a set of subtitles. The maximum for a single media file is 16 subtitles. In the same request, the subtitle IDs specified in AddSubtitles must all be different from DeleteSubtitleIds.</p>
     */
    public $AddSubtitles;

    /**
     * @var array <p>Unique identifier of subtitle to be deleted. In the same request, the subtitle id specified in AddSubtitles must be different from all DeleteSubtitleIds.</p>
     */
    public $DeleteSubtitleIds;

    /**
     * @var integer <p>The value 1 means to clear all subtitle information of the media file. Other values are meaningless.<br>In the same request, ClearSubtitles and AddSubtitles cannot appear simultaneously.</p>
     */
    public $ClearSubtitles;

    /**
     * @var array <p>ID of the knowledge base to be outbound.</p>
     */
    public $DeleteKnowledgeBases;

    /**
     * @var integer <p>Value 1 means removing this media file from ALL knowledge bases, other values meaningless.</p><p><br>In the same request, ClearKnowledgeBases and DeleteKnowledgeBases cannot appear simultaneously.<p></p></p>
     */
    public $ClearKnowledgeBases;

    /**
     * @param string $FileId <p>Media file unique identifier.</p>
     * @param integer $SubAppId <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param string $Name <p>Media filename, up to 64 characters.</p>
     * @param string $Description <p>Media file description, up to 128 characters.</p>
     * @param integer $ClassId <p>Media File Category ID.</p>
     * @param string $ExpireTime <p>Media file expiry time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. "9999-12-31T23:59:59Z" means it never expires. After expiry, the media file and its related resources (transcoding results, sprites) will be permanently deleted.</p>
     * @param string $CoverData <p>Base64-encoded string of the video cover image file (for example, jpeg, png), only supports gif, jpeg, and png image formats.</p>
     * @param array $AddKeyFrameDescs <p>Newly added set of video timestamp information. If a timestamp already exists at a certain offset, an overlay operation will be performed. A single media file can have up to 100 timestamp entries. In the same request, the time offset parameters of AddKeyFrameDescs must all be different from those of DeleteKeyFrameDescs.</p>
     * @param array $DeleteKeyFrameDescs <p>Time offset of the video timestamp information set to be deleted, unit: seconds. In the same request, the time offset parameter of AddKeyFrameDescs must be different from that of DeleteKeyFrameDescs.</p>
     * @param integer $ClearKeyFrameDescs <p>The value 1 means to clear video dotting information. Other values are meaningless.<br>In the same request, ClearKeyFrameDescs and AddKeyFrameDescs cannot appear simultaneously.</p>
     * @param array $AddTags <p>A newly-added group of tags. The maximum for a single media file is 16 tags, and a single tag can contain up to 32 characters. In the same request, the AddTags parameter must be different from DeleteTags.</p>
     * @param array $DeleteTags <p>A set of tags to delete. In the same request, the AddTags parameter must be all different from DeleteTags.</p>
     * @param integer $ClearTags <p>The value 1 means to clear all tags of the media file. Other values are meaningless.<br>In the same request, ClearTags and AddTags cannot appear simultaneously.</p>
     * @param array $AddSubtitles <p>Add a set of subtitles. The maximum for a single media file is 16 subtitles. In the same request, the subtitle IDs specified in AddSubtitles must all be different from DeleteSubtitleIds.</p>
     * @param array $DeleteSubtitleIds <p>Unique identifier of subtitle to be deleted. In the same request, the subtitle id specified in AddSubtitles must be different from all DeleteSubtitleIds.</p>
     * @param integer $ClearSubtitles <p>The value 1 means to clear all subtitle information of the media file. Other values are meaningless.<br>In the same request, ClearSubtitles and AddSubtitles cannot appear simultaneously.</p>
     * @param array $DeleteKnowledgeBases <p>ID of the knowledge base to be outbound.</p>
     * @param integer $ClearKnowledgeBases <p>Value 1 means removing this media file from ALL knowledge bases, other values meaningless.</p><p><br>In the same request, ClearKnowledgeBases and DeleteKnowledgeBases cannot appear simultaneously.<p></p></p>
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
