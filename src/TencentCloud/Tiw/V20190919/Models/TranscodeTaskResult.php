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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Transcoding task result.
 *
 * @method string getResultUrl() Obtain Transcoding result URL.
 * @method void setResultUrl(string $ResultUrl) Set Transcoding result URL.
 * @method string getResolution() Obtain Target resolution.
 * @method void setResolution(string $Resolution) Set Target resolution.
 * @method string getTitle() Obtain Title (usually the document name).
 * @method void setTitle(string $Title) Set Title (usually the document name).
 * @method integer getPages() Obtain Number of transcoded pages.
 * @method void setPages(integer $Pages) Set Number of transcoded pages.
 * @method string getThumbnailUrl() Obtain URL prefix of the thumbnail. If the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/`, the thumbnail URL for the first page of the dynamically transcoded PowerPoint file is
`http://example.com/g0jb42ps49vtebjshilb/1.jpg`, and so on.

If the document transcoding request carries the ThumbnailResolution parameter and the transcoding type is dynamic transcoding, this parameter is not null. In other cases, this parameter is null.
 * @method void setThumbnailUrl(string $ThumbnailUrl) Set URL prefix of the thumbnail. If the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/`, the thumbnail URL for the first page of the dynamically transcoded PowerPoint file is
`http://example.com/g0jb42ps49vtebjshilb/1.jpg`, and so on.

If the document transcoding request carries the ThumbnailResolution parameter and the transcoding type is dynamic transcoding, this parameter is not null. In other cases, this parameter is null.
 * @method string getThumbnailResolution() Obtain Resolution of the thumbnail generated for dynamic transcoding
 * @method void setThumbnailResolution(string $ThumbnailResolution) Set Resolution of the thumbnail generated for dynamic transcoding
 * @method string getCompressFileUrl() Obtain URL for downloading the transcoded and compressed file. If `CompressFileType` carried in the document transcoding request is null or is not a supported compression format, this parameter is null.
 * @method void setCompressFileUrl(string $CompressFileUrl) Set URL for downloading the transcoded and compressed file. If `CompressFileType` carried in the document transcoding request is null or is not a supported compression format, this parameter is null.
 * @method integer getErrorCode() Obtain Task execution error code.
 * @method void setErrorCode(integer $ErrorCode) Set Task execution error code.
 * @method string getErrorMsg() Obtain Task execution error message.
 * @method void setErrorMsg(string $ErrorMsg) Set Task execution error message.
 */
class TranscodeTaskResult extends AbstractModel
{
    /**
     * @var string Transcoding result URL.
     */
    public $ResultUrl;

    /**
     * @var string Target resolution.
     */
    public $Resolution;

    /**
     * @var string Title (usually the document name).
     */
    public $Title;

    /**
     * @var integer Number of transcoded pages.
     */
    public $Pages;

    /**
     * @var string URL prefix of the thumbnail. If the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/`, the thumbnail URL for the first page of the dynamically transcoded PowerPoint file is
`http://example.com/g0jb42ps49vtebjshilb/1.jpg`, and so on.

If the document transcoding request carries the ThumbnailResolution parameter and the transcoding type is dynamic transcoding, this parameter is not null. In other cases, this parameter is null.
     */
    public $ThumbnailUrl;

    /**
     * @var string Resolution of the thumbnail generated for dynamic transcoding
     */
    public $ThumbnailResolution;

    /**
     * @var string URL for downloading the transcoded and compressed file. If `CompressFileType` carried in the document transcoding request is null or is not a supported compression format, this parameter is null.
     */
    public $CompressFileUrl;

    /**
     * @var integer Task execution error code.
     */
    public $ErrorCode;

    /**
     * @var string Task execution error message.
     */
    public $ErrorMsg;

    /**
     * @param string $ResultUrl Transcoding result URL.
     * @param string $Resolution Target resolution.
     * @param string $Title Title (usually the document name).
     * @param integer $Pages Number of transcoded pages.
     * @param string $ThumbnailUrl URL prefix of the thumbnail. If the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/`, the thumbnail URL for the first page of the dynamically transcoded PowerPoint file is
`http://example.com/g0jb42ps49vtebjshilb/1.jpg`, and so on.

If the document transcoding request carries the ThumbnailResolution parameter and the transcoding type is dynamic transcoding, this parameter is not null. In other cases, this parameter is null.
     * @param string $ThumbnailResolution Resolution of the thumbnail generated for dynamic transcoding
     * @param string $CompressFileUrl URL for downloading the transcoded and compressed file. If `CompressFileType` carried in the document transcoding request is null or is not a supported compression format, this parameter is null.
     * @param integer $ErrorCode Task execution error code.
     * @param string $ErrorMsg Task execution error message.
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
        if (array_key_exists("ResultUrl",$param) and $param["ResultUrl"] !== null) {
            $this->ResultUrl = $param["ResultUrl"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("ThumbnailUrl",$param) and $param["ThumbnailUrl"] !== null) {
            $this->ThumbnailUrl = $param["ThumbnailUrl"];
        }

        if (array_key_exists("ThumbnailResolution",$param) and $param["ThumbnailResolution"] !== null) {
            $this->ThumbnailResolution = $param["ThumbnailResolution"];
        }

        if (array_key_exists("CompressFileUrl",$param) and $param["CompressFileUrl"] !== null) {
            $this->CompressFileUrl = $param["CompressFileUrl"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
