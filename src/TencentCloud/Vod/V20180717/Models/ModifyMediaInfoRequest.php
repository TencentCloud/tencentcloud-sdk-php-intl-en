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
 * @method string getFileId() Obtain Unique identifier of a media file.
 * @method void setFileId(string $FileId) Set Unique identifier of a media file.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Media filename, with a maximum length of 64 characters.
 * @method void setName(string $Name) Set Media filename, with a maximum length of 64 characters.
 * @method string getDescription() Obtain Media file description, longest 128 characters.
 * @method void setDescription(string $Description) Set Media file description, longest 128 characters.
 * @method integer getClassId() Obtain Media File Category ID.
 * @method void setClassId(integer $ClassId) Set Media File Category ID.
 * @method string getExpireTime() Obtain Media file expiry time uses [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate no expiry. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted.
 * @method void setExpireTime(string $ExpireTime) Set Media file expiry time uses [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate no expiry. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted.
 * @method string getCoverData() Obtain The video cover image file (such as jpeg, png) is an encoded string in [Base64](https://tools.ietf.org/html/rfc4648). Only three image formats (gif, jpeg, png) are supported.
 * @method void setCoverData(string $CoverData) Set The video cover image file (such as jpeg, png) is an encoded string in [Base64](https://tools.ietf.org/html/rfc4648). Only three image formats (gif, jpeg, png) are supported.
 * @method array getAddKeyFrameDescs() Obtain Newly added set of video timestamp information. If timestamp already exists at a certain offset, perform overlay operation. Maximum for a single media file is 100 Dotting Information. In the same request, time offset parameter of AddKeyFrameDescs must be all different from DeleteKeyFrameDescs.
 * @method void setAddKeyFrameDescs(array $AddKeyFrameDescs) Set Newly added set of video timestamp information. If timestamp already exists at a certain offset, perform overlay operation. Maximum for a single media file is 100 Dotting Information. In the same request, time offset parameter of AddKeyFrameDescs must be all different from DeleteKeyFrameDescs.
 * @method array getDeleteKeyFrameDescs() Obtain Time offset of the video timestamp information set to be deleted, unit: second. In the same request, the time offset parameter of AddKeyFrameDescs must be consistent with all different DeleteKeyFrameDescs.
 * @method void setDeleteKeyFrameDescs(array $DeleteKeyFrameDescs) Set Time offset of the video timestamp information set to be deleted, unit: second. In the same request, the time offset parameter of AddKeyFrameDescs must be consistent with all different DeleteKeyFrameDescs.
 * @method integer getClearKeyFrameDescs() Obtain Value 1 indicates clearing video dotting information. Other values meaningless.
In the same request, ClearKeyFrameDescs and AddKeyFrameDescs cannot appear simultaneously.
 * @method void setClearKeyFrameDescs(integer $ClearKeyFrameDescs) Set Value 1 indicates clearing video dotting information. Other values meaningless.
In the same request, ClearKeyFrameDescs and AddKeyFrameDescs cannot appear simultaneously.
 * @method array getAddTags() Obtain A group of newly-added tags. Maximum for a single media file is 16 tags. Maximum for a single tag is 32 characters. In the same request, the AddTags parameter must be consistent with DeleteTags.
 * @method void setAddTags(array $AddTags) Set A group of newly-added tags. Maximum for a single media file is 16 tags. Maximum for a single tag is 32 characters. In the same request, the AddTags parameter must be consistent with DeleteTags.
 * @method array getDeleteTags() Obtain A group of tags to delete. In the same request, the AddTags parameter must be different from DeleteTags.
 * @method void setDeleteTags(array $DeleteTags) Set A group of tags to delete. In the same request, the AddTags parameter must be different from DeleteTags.
 * @method integer getClearTags() Obtain Value 1 means clear all media files, other values meaningless.
In the same request, ClearTags and AddTags cannot appear simultaneously.
 * @method void setClearTags(integer $ClearTags) Set Value 1 means clear all media files, other values meaningless.
In the same request, ClearTags and AddTags cannot appear simultaneously.
 * @method array getAddSubtitles() Obtain Add a set of subtitles. Maximum for a single media file is 16 subtitles. In the same request, the specified subtitle ID in AddSubtitles must be all different from those in DeleteSubtitleIds.
 * @method void setAddSubtitles(array $AddSubtitles) Set Add a set of subtitles. Maximum for a single media file is 16 subtitles. In the same request, the specified subtitle ID in AddSubtitles must be all different from those in DeleteSubtitleIds.
 * @method array getDeleteSubtitleIds() Obtain Unique identifier of subtitle to be deleted. In the same request, the specified subtitle id in AddSubtitles must be consistent with all different in DeleteSubtitleIds.
 * @method void setDeleteSubtitleIds(array $DeleteSubtitleIds) Set Unique identifier of subtitle to be deleted. In the same request, the specified subtitle id in AddSubtitles must be consistent with all different in DeleteSubtitleIds.
 * @method integer getClearSubtitles() Obtain Value 1 means clear all subtitle information of the media file. Other values meaningless.
In the same request, ClearSubtitles and AddSubtitles cannot appear simultaneously.
 * @method void setClearSubtitles(integer $ClearSubtitles) Set Value 1 means clear all subtitle information of the media file. Other values meaningless.
In the same request, ClearSubtitles and AddSubtitles cannot appear simultaneously.
 */
class ModifyMediaInfoRequest extends AbstractModel
{
    /**
     * @var string Unique identifier of a media file.
     */
    public $FileId;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Media filename, with a maximum length of 64 characters.
     */
    public $Name;

    /**
     * @var string Media file description, longest 128 characters.
     */
    public $Description;

    /**
     * @var integer Media File Category ID.
     */
    public $ClassId;

    /**
     * @var string Media file expiry time uses [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate no expiry. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted.
     */
    public $ExpireTime;

    /**
     * @var string The video cover image file (such as jpeg, png) is an encoded string in [Base64](https://tools.ietf.org/html/rfc4648). Only three image formats (gif, jpeg, png) are supported.
     */
    public $CoverData;

    /**
     * @var array Newly added set of video timestamp information. If timestamp already exists at a certain offset, perform overlay operation. Maximum for a single media file is 100 Dotting Information. In the same request, time offset parameter of AddKeyFrameDescs must be all different from DeleteKeyFrameDescs.
     */
    public $AddKeyFrameDescs;

    /**
     * @var array Time offset of the video timestamp information set to be deleted, unit: second. In the same request, the time offset parameter of AddKeyFrameDescs must be consistent with all different DeleteKeyFrameDescs.
     */
    public $DeleteKeyFrameDescs;

    /**
     * @var integer Value 1 indicates clearing video dotting information. Other values meaningless.
In the same request, ClearKeyFrameDescs and AddKeyFrameDescs cannot appear simultaneously.
     */
    public $ClearKeyFrameDescs;

    /**
     * @var array A group of newly-added tags. Maximum for a single media file is 16 tags. Maximum for a single tag is 32 characters. In the same request, the AddTags parameter must be consistent with DeleteTags.
     */
    public $AddTags;

    /**
     * @var array A group of tags to delete. In the same request, the AddTags parameter must be different from DeleteTags.
     */
    public $DeleteTags;

    /**
     * @var integer Value 1 means clear all media files, other values meaningless.
In the same request, ClearTags and AddTags cannot appear simultaneously.
     */
    public $ClearTags;

    /**
     * @var array Add a set of subtitles. Maximum for a single media file is 16 subtitles. In the same request, the specified subtitle ID in AddSubtitles must be all different from those in DeleteSubtitleIds.
     */
    public $AddSubtitles;

    /**
     * @var array Unique identifier of subtitle to be deleted. In the same request, the specified subtitle id in AddSubtitles must be consistent with all different in DeleteSubtitleIds.
     */
    public $DeleteSubtitleIds;

    /**
     * @var integer Value 1 means clear all subtitle information of the media file. Other values meaningless.
In the same request, ClearSubtitles and AddSubtitles cannot appear simultaneously.
     */
    public $ClearSubtitles;

    /**
     * @param string $FileId Unique identifier of a media file.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Media filename, with a maximum length of 64 characters.
     * @param string $Description Media file description, longest 128 characters.
     * @param integer $ClassId Media File Category ID.
     * @param string $ExpireTime Media file expiry time uses [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate no expiry. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted.
     * @param string $CoverData The video cover image file (such as jpeg, png) is an encoded string in [Base64](https://tools.ietf.org/html/rfc4648). Only three image formats (gif, jpeg, png) are supported.
     * @param array $AddKeyFrameDescs Newly added set of video timestamp information. If timestamp already exists at a certain offset, perform overlay operation. Maximum for a single media file is 100 Dotting Information. In the same request, time offset parameter of AddKeyFrameDescs must be all different from DeleteKeyFrameDescs.
     * @param array $DeleteKeyFrameDescs Time offset of the video timestamp information set to be deleted, unit: second. In the same request, the time offset parameter of AddKeyFrameDescs must be consistent with all different DeleteKeyFrameDescs.
     * @param integer $ClearKeyFrameDescs Value 1 indicates clearing video dotting information. Other values meaningless.
In the same request, ClearKeyFrameDescs and AddKeyFrameDescs cannot appear simultaneously.
     * @param array $AddTags A group of newly-added tags. Maximum for a single media file is 16 tags. Maximum for a single tag is 32 characters. In the same request, the AddTags parameter must be consistent with DeleteTags.
     * @param array $DeleteTags A group of tags to delete. In the same request, the AddTags parameter must be different from DeleteTags.
     * @param integer $ClearTags Value 1 means clear all media files, other values meaningless.
In the same request, ClearTags and AddTags cannot appear simultaneously.
     * @param array $AddSubtitles Add a set of subtitles. Maximum for a single media file is 16 subtitles. In the same request, the specified subtitle ID in AddSubtitles must be all different from those in DeleteSubtitleIds.
     * @param array $DeleteSubtitleIds Unique identifier of subtitle to be deleted. In the same request, the specified subtitle id in AddSubtitles must be consistent with all different in DeleteSubtitleIds.
     * @param integer $ClearSubtitles Value 1 means clear all subtitle information of the media file. Other values meaningless.
In the same request, ClearSubtitles and AddSubtitles cannot appear simultaneously.
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
    }
}
