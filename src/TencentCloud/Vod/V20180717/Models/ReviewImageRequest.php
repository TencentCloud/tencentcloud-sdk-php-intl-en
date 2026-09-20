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
 * ReviewImage request structure.
 *
 * @method integer getDefinition() Obtain Image content review template ID. Valid values:
<li>10: Pre-set template. Violation labels supported for detection include Porn, Terror, and Polity.</li>
 * @method void setDefinition(integer $Definition) Set Image content review template ID. Valid values:
<li>10: Pre-set template. Violation labels supported for detection include Porn, Terror, and Polity.</li>
 * @method string getFileId() Obtain Media file ID, which is the globally unique identifier of the file on VOD. This interface requires that the media file must be in an image format.
Either FileId or MediaStoragePath must be provided.
 * @method void setFileId(string $FileId) Set Media file ID, which is the globally unique identifier of the file on VOD. This interface requires that the media file must be in an image format.
Either FileId or MediaStoragePath must be provided.
 * @method string getMediaStoragePath() Obtain Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
Either FileId or MediaStoragePath must be provided.
 * @method void setMediaStoragePath(string $MediaStoragePath) Set Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
Either FileId or MediaStoragePath must be provided.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
 */
class ReviewImageRequest extends AbstractModel
{
    /**
     * @var integer Image content review template ID. Valid values:
<li>10: Pre-set template. Violation labels supported for detection include Porn, Terror, and Polity.</li>
     */
    public $Definition;

    /**
     * @var string Media file ID, which is the globally unique identifier of the file on VOD. This interface requires that the media file must be in an image format.
Either FileId or MediaStoragePath must be provided.
     */
    public $FileId;

    /**
     * @var string Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
Either FileId or MediaStoragePath must be provided.
     */
    public $MediaStoragePath;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
     */
    public $SubAppId;

    /**
     * @param integer $Definition Image content review template ID. Valid values:
<li>10: Pre-set template. Violation labels supported for detection include Porn, Terror, and Polity.</li>
     * @param string $FileId Media file ID, which is the globally unique identifier of the file on VOD. This interface requires that the media file must be in an image format.
Either FileId or MediaStoragePath must be provided.
     * @param string $MediaStoragePath Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
Either FileId or MediaStoragePath must be provided.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
