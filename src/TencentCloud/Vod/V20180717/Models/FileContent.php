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
 * Stored file in VOD.
 *
 * @method string getKey() Obtain Object key.
 * @method void setKey(string $Key) Set Object key.
 * @method string getLastModified() Obtain Last modification time of the object in ISO 8601 format, for example, 2019-05-24T10:56:40Z.
 * @method void setLastModified(string $LastModified) Set Last modification time of the object in ISO 8601 format, for example, 2019-05-24T10:56:40Z.
 * @method string getETag() Obtain Entity Tag is an information Tag that identifies the object content upon creation. It can be used to check whether the object content has changed.
 * @method void setETag(string $ETag) Set Entity Tag is an information Tag that identifies the object content upon creation. It can be used to check whether the object content has changed.
 * @method integer getSize() Obtain Object size in bytes.
 * @method void setSize(integer $Size) Set Object size in bytes.
 * @method string getStorageClass() Obtain For enumeration values, please refer to the [storage type](https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1) document, for example, STANDARD_IA and ARCHIVE.
 * @method void setStorageClass(string $StorageClass) Set For enumeration values, please refer to the [storage type](https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1) document, for example, STANDARD_IA and ARCHIVE.
 * @method string getFileId() Obtain Unique identifier of the media file corresponding to this file.
 * @method void setFileId(string $FileId) Set Unique identifier of the media file corresponding to this file.
 * @method string getCategory() Obtain File category: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li> <li>Other: other files</li>
 * @method void setCategory(string $Category) Set File category: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li> <li>Other: other files</li>
 * @method string getFileType() Obtain Optional values:
-OriginalFiles: source file
- TranscodeFiles: transcoded file
-AdaptiveDynamicStreamingFiles: Transcode to an adaptive bitrate stream file
- SubtitleFiles: subtitle file.
- SampleSnapshotFiles: sampled screenshot files
- ImageSpriteFiles: image sprite screenshot files
- SnapshotByTimeOffsetFiles: time point screenshot files.

 * @method void setFileType(string $FileType) Set Optional values:
-OriginalFiles: source file
- TranscodeFiles: transcoded file
-AdaptiveDynamicStreamingFiles: Transcode to an adaptive bitrate stream file
- SubtitleFiles: subtitle file.
- SampleSnapshotFiles: sampled screenshot files
- ImageSpriteFiles: image sprite screenshot files
- SnapshotByTimeOffsetFiles: time point screenshot files.

 * @method integer getDefinition() Obtain Video template ID. For template definition, see Transcoding Template.
 * @method void setDefinition(integer $Definition) Set Video template ID. For template definition, see Transcoding Template.
 * @method string getSubtitleID() Obtain Subtitle ID.
Value only when FileType is SubtitleFiles.
 * @method void setSubtitleID(string $SubtitleID) Set Subtitle ID.
Value only when FileType is SubtitleFiles.
 */
class FileContent extends AbstractModel
{
    /**
     * @var string Object key.
     */
    public $Key;

    /**
     * @var string Last modification time of the object in ISO 8601 format, for example, 2019-05-24T10:56:40Z.
     */
    public $LastModified;

    /**
     * @var string Entity Tag is an information Tag that identifies the object content upon creation. It can be used to check whether the object content has changed.
     */
    public $ETag;

    /**
     * @var integer Object size in bytes.
     */
    public $Size;

    /**
     * @var string For enumeration values, please refer to the [storage type](https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1) document, for example, STANDARD_IA and ARCHIVE.
     */
    public $StorageClass;

    /**
     * @var string Unique identifier of the media file corresponding to this file.
     */
    public $FileId;

    /**
     * @var string File category: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li> <li>Other: other files</li>
     */
    public $Category;

    /**
     * @var string Optional values:
-OriginalFiles: source file
- TranscodeFiles: transcoded file
-AdaptiveDynamicStreamingFiles: Transcode to an adaptive bitrate stream file
- SubtitleFiles: subtitle file.
- SampleSnapshotFiles: sampled screenshot files
- ImageSpriteFiles: image sprite screenshot files
- SnapshotByTimeOffsetFiles: time point screenshot files.

     */
    public $FileType;

    /**
     * @var integer Video template ID. For template definition, see Transcoding Template.
     */
    public $Definition;

    /**
     * @var string Subtitle ID.
Value only when FileType is SubtitleFiles.
     */
    public $SubtitleID;

    /**
     * @param string $Key Object key.
     * @param string $LastModified Last modification time of the object in ISO 8601 format, for example, 2019-05-24T10:56:40Z.
     * @param string $ETag Entity Tag is an information Tag that identifies the object content upon creation. It can be used to check whether the object content has changed.
     * @param integer $Size Object size in bytes.
     * @param string $StorageClass For enumeration values, please refer to the [storage type](https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1) document, for example, STANDARD_IA and ARCHIVE.
     * @param string $FileId Unique identifier of the media file corresponding to this file.
     * @param string $Category File category: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li> <li>Other: other files</li>
     * @param string $FileType Optional values:
-OriginalFiles: source file
- TranscodeFiles: transcoded file
-AdaptiveDynamicStreamingFiles: Transcode to an adaptive bitrate stream file
- SubtitleFiles: subtitle file.
- SampleSnapshotFiles: sampled screenshot files
- ImageSpriteFiles: image sprite screenshot files
- SnapshotByTimeOffsetFiles: time point screenshot files.

     * @param integer $Definition Video template ID. For template definition, see Transcoding Template.
     * @param string $SubtitleID Subtitle ID.
Value only when FileType is SubtitleFiles.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("LastModified",$param) and $param["LastModified"] !== null) {
            $this->LastModified = $param["LastModified"];
        }

        if (array_key_exists("ETag",$param) and $param["ETag"] !== null) {
            $this->ETag = $param["ETag"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("StorageClass",$param) and $param["StorageClass"] !== null) {
            $this->StorageClass = $param["StorageClass"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SubtitleID",$param) and $param["SubtitleID"] !== null) {
            $this->SubtitleID = $param["SubtitleID"];
        }
    }
}
