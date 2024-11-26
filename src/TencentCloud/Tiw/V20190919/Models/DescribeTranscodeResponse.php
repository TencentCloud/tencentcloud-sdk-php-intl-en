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
 * DescribeTranscode response structure.
 *
 * @method integer getPages() Obtain Total number of document pages
 * @method void setPages(integer $Pages) Set Total number of document pages
 * @method integer getProgress() Obtain Transcoding progress. Value range: 0 to 100
 * @method void setProgress(integer $Progress) Set Transcoding progress. Value range: 0 to 100
 * @method string getResolution() Obtain Document resolution
 * @method void setResolution(string $Resolution) Set Document resolution
 * @method string getResultUrl() Obtain URL of the transcoding result
Dynamic transcoding: link of the HTML5 page transcoded from a PowerPoint file
Static transcoding: URL prefix of the image transcoded for each document page. For example, if the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/`, the image URL of the first page is
`http://example.com/g0jb42ps49vtebjshilb/1.jpg`, and so on.
 * @method void setResultUrl(string $ResultUrl) Set URL of the transcoding result
Dynamic transcoding: link of the HTML5 page transcoded from a PowerPoint file
Static transcoding: URL prefix of the image transcoded for each document page. For example, if the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/`, the image URL of the first page is
`http://example.com/g0jb42ps49vtebjshilb/1.jpg`, and so on.
 * @method string getStatus() Obtain Current task state
- QUEUED: queuing for transcoding
- PROCESSING: transcoding is in progress
- FINISHED: transcoded
 * @method void setStatus(string $Status) Set Current task state
- QUEUED: queuing for transcoding
- PROCESSING: transcoding is in progress
- FINISHED: transcoded
 * @method string getTaskId() Obtain Unique ID of the transcoding task
 * @method void setTaskId(string $TaskId) Set Unique ID of the transcoding task
 * @method string getTitle() Obtain Document name
 * @method void setTitle(string $Title) Set Document name
 * @method string getThumbnailUrl() Obtain URL prefix of the thumbnail. If the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/ `, the thumbnail URL for the first page of the dynamically transcoded PowerPoint file is
`http://example.com/g0jb42ps49vtebjshilb/1.jpg`, and so on.

If the document transcoding request carries the ThumbnailResolution parameter and the transcoding type is dynamic transcoding, this parameter is not null. In other cases, this parameter is null.
 * @method void setThumbnailUrl(string $ThumbnailUrl) Set URL prefix of the thumbnail. If the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/ `, the thumbnail URL for the first page of the dynamically transcoded PowerPoint file is
`http://example.com/g0jb42ps49vtebjshilb/1.jpg`, and so on.

If the document transcoding request carries the ThumbnailResolution parameter and the transcoding type is dynamic transcoding, this parameter is not null. In other cases, this parameter is null.
 * @method string getThumbnailResolution() Obtain Resolution of the thumbnail generated for dynamic transcoding
 * @method void setThumbnailResolution(string $ThumbnailResolution) Set Resolution of the thumbnail generated for dynamic transcoding
 * @method string getCompressFileUrl() Obtain URL for downloading the transcoded and compressed file. If `CompressFileType` carried in the document transcoding request is null or is not a supported compression format, this parameter is null.
 * @method void setCompressFileUrl(string $CompressFileUrl) Set URL for downloading the transcoded and compressed file. If `CompressFileType` carried in the document transcoding request is null or is not a supported compression format, this parameter is null.
 * @method string getResourceListUrl() Obtain Download URL (for trial) of the resource list.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setResourceListUrl(string $ResourceListUrl) Set Download URL (for trial) of the resource list.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getExt() Obtain Document generation mode (for trial).
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setExt(string $Ext) Set Document generation mode (for trial).
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Document transcoding task creation time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Document transcoding task creation time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method integer getAssignTime() Obtain Document transcoding task assignment time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setAssignTime(integer $AssignTime) Set Document transcoding task assignment time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method integer getFinishedTime() Obtain Document transcoding task finished time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setFinishedTime(integer $FinishedTime) Set Document transcoding task finished time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeTranscodeResponse extends AbstractModel
{
    /**
     * @var integer Total number of document pages
     */
    public $Pages;

    /**
     * @var integer Transcoding progress. Value range: 0 to 100
     */
    public $Progress;

    /**
     * @var string Document resolution
     */
    public $Resolution;

    /**
     * @var string URL of the transcoding result
Dynamic transcoding: link of the HTML5 page transcoded from a PowerPoint file
Static transcoding: URL prefix of the image transcoded for each document page. For example, if the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/`, the image URL of the first page is
`http://example.com/g0jb42ps49vtebjshilb/1.jpg`, and so on.
     */
    public $ResultUrl;

    /**
     * @var string Current task state
- QUEUED: queuing for transcoding
- PROCESSING: transcoding is in progress
- FINISHED: transcoded
     */
    public $Status;

    /**
     * @var string Unique ID of the transcoding task
     */
    public $TaskId;

    /**
     * @var string Document name
     */
    public $Title;

    /**
     * @var string URL prefix of the thumbnail. If the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/ `, the thumbnail URL for the first page of the dynamically transcoded PowerPoint file is
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
     * @var string Download URL (for trial) of the resource list.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $ResourceListUrl;

    /**
     * @var string Document generation mode (for trial).
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Ext;

    /**
     * @var integer Document transcoding task creation time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Document transcoding task assignment time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $AssignTime;

    /**
     * @var integer Document transcoding task finished time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $FinishedTime;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Pages Total number of document pages
     * @param integer $Progress Transcoding progress. Value range: 0 to 100
     * @param string $Resolution Document resolution
     * @param string $ResultUrl URL of the transcoding result
Dynamic transcoding: link of the HTML5 page transcoded from a PowerPoint file
Static transcoding: URL prefix of the image transcoded for each document page. For example, if the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/`, the image URL of the first page is
`http://example.com/g0jb42ps49vtebjshilb/1.jpg`, and so on.
     * @param string $Status Current task state
- QUEUED: queuing for transcoding
- PROCESSING: transcoding is in progress
- FINISHED: transcoded
     * @param string $TaskId Unique ID of the transcoding task
     * @param string $Title Document name
     * @param string $ThumbnailUrl URL prefix of the thumbnail. If the URL prefix is `http://example.com/g0jb42ps49vtebjshilb/ `, the thumbnail URL for the first page of the dynamically transcoded PowerPoint file is
`http://example.com/g0jb42ps49vtebjshilb/1.jpg`, and so on.

If the document transcoding request carries the ThumbnailResolution parameter and the transcoding type is dynamic transcoding, this parameter is not null. In other cases, this parameter is null.
     * @param string $ThumbnailResolution Resolution of the thumbnail generated for dynamic transcoding
     * @param string $CompressFileUrl URL for downloading the transcoded and compressed file. If `CompressFileType` carried in the document transcoding request is null or is not a supported compression format, this parameter is null.
     * @param string $ResourceListUrl Download URL (for trial) of the resource list.
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param string $Ext Document generation mode (for trial).
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Document transcoding task creation time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param integer $AssignTime Document transcoding task assignment time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param integer $FinishedTime Document transcoding task finished time, unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("ResultUrl",$param) and $param["ResultUrl"] !== null) {
            $this->ResultUrl = $param["ResultUrl"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
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

        if (array_key_exists("ResourceListUrl",$param) and $param["ResourceListUrl"] !== null) {
            $this->ResourceListUrl = $param["ResourceListUrl"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = $param["Ext"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AssignTime",$param) and $param["AssignTime"] !== null) {
            $this->AssignTime = $param["AssignTime"];
        }

        if (array_key_exists("FinishedTime",$param) and $param["FinishedTime"] !== null) {
            $this->FinishedTime = $param["FinishedTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
