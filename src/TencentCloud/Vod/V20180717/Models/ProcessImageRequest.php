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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ProcessImage request structure.
 *
 * @method string getFileId() Obtain The unique ID of the media file. For this API to work, the file must be an image.
 * @method void setFileId(string $FileId) Set The unique ID of the media file. For this API to work, the file must be an image.
 * @method string getOperation() Obtain Operation. `ContentReview` is the only valid value currently.
 * @method void setOperation(string $Operation) Set Operation. `ContentReview` is the only valid value currently.
 * @method ImageContentReviewInput getContentReviewInput() Obtain Image recognition parameters. This parameter is valid if `Operation` is `ContentReview`.
 * @method void setContentReviewInput(ImageContentReviewInput $ContentReviewInput) Set Image recognition parameters. This parameter is valid if `Operation` is `ContentReview`.
 * @method integer getSubAppId() Obtain The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
 */
class ProcessImageRequest extends AbstractModel
{
    /**
     * @var string The unique ID of the media file. For this API to work, the file must be an image.
     */
    public $FileId;

    /**
     * @var string Operation. `ContentReview` is the only valid value currently.
     */
    public $Operation;

    /**
     * @var ImageContentReviewInput Image recognition parameters. This parameter is valid if `Operation` is `ContentReview`.
     */
    public $ContentReviewInput;

    /**
     * @var integer The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param string $FileId The unique ID of the media file. For this API to work, the file must be an image.
     * @param string $Operation Operation. `ContentReview` is the only valid value currently.
     * @param ImageContentReviewInput $ContentReviewInput Image recognition parameters. This parameter is valid if `Operation` is `ContentReview`.
     * @param integer $SubAppId The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ContentReviewInput",$param) and $param["ContentReviewInput"] !== null) {
            $this->ContentReviewInput = new ImageContentReviewInput();
            $this->ContentReviewInput->deserialize($param["ContentReviewInput"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
