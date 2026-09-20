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
 * Video sprite capture task. This structure is only used for tasks initiated by the 2017 version of the capture CSS sprites API (https://www.tencentcloud.com/document/product/266/8101?from_cn_redirect=1).
 *
 * @method string getTaskId() Obtain <p>Screenshot sprite task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Screenshot sprite task ID.</p>
 * @method integer getErrCode() Obtain <p>Error code</p><li>0: Successful;</li><li>Other values: Failed.</li>
 * @method void setErrCode(integer $ErrCode) Set <p>Error code</p><li>0: Successful;</li><li>Other values: Failed.</li>
 * @method string getMessage() Obtain <p>Error message.</p>
 * @method void setMessage(string $Message) Set <p>Error message.</p>
 * @method string getFileId() Obtain <p>Capture the CSS sprite file ID.</p>
 * @method void setFileId(string $FileId) Set <p>Capture the CSS sprite file ID.</p>
 * @method integer getDefinition() Obtain <p>Sprite sheet specification. See <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">image sprite screenshot template</a>.</p>
 * @method void setDefinition(integer $Definition) Set <p>Sprite sheet specification. See <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">image sprite screenshot template</a>.</p>
 * @method integer getTotalCount() Obtain <p>Total number of small images in the sprite sheet.</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Total number of small images in the sprite sheet.</p>
 * @method array getImageSpriteUrlSet() Obtain <p>Addresses for capturing CSS sprites output.</p>
 * @method void setImageSpriteUrlSet(array $ImageSpriteUrlSet) Set <p>Addresses for capturing CSS sprites output.</p>
 * @method string getWebVttUrl() Obtain <p>Sprite sheet sub-image position and temporal relationship WebVtt file address.</p>
 * @method void setWebVttUrl(string $WebVttUrl) Set <p>Sprite sheet sub-image position and temporal relationship WebVtt file address.</p>
 */
class CreateImageSpriteTask2017 extends AbstractModel
{
    /**
     * @var string <p>Screenshot sprite task ID.</p>
     */
    public $TaskId;

    /**
     * @var integer <p>Error code</p><li>0: Successful;</li><li>Other values: Failed.</li>
     */
    public $ErrCode;

    /**
     * @var string <p>Error message.</p>
     */
    public $Message;

    /**
     * @var string <p>Capture the CSS sprite file ID.</p>
     */
    public $FileId;

    /**
     * @var integer <p>Sprite sheet specification. See <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">image sprite screenshot template</a>.</p>
     */
    public $Definition;

    /**
     * @var integer <p>Total number of small images in the sprite sheet.</p>
     */
    public $TotalCount;

    /**
     * @var array <p>Addresses for capturing CSS sprites output.</p>
     */
    public $ImageSpriteUrlSet;

    /**
     * @var string <p>Sprite sheet sub-image position and temporal relationship WebVtt file address.</p>
     */
    public $WebVttUrl;

    /**
     * @param string $TaskId <p>Screenshot sprite task ID.</p>
     * @param integer $ErrCode <p>Error code</p><li>0: Successful;</li><li>Other values: Failed.</li>
     * @param string $Message <p>Error message.</p>
     * @param string $FileId <p>Capture the CSS sprite file ID.</p>
     * @param integer $Definition <p>Sprite sheet specification. See <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">image sprite screenshot template</a>.</p>
     * @param integer $TotalCount <p>Total number of small images in the sprite sheet.</p>
     * @param array $ImageSpriteUrlSet <p>Addresses for capturing CSS sprites output.</p>
     * @param string $WebVttUrl <p>Sprite sheet sub-image position and temporal relationship WebVtt file address.</p>
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

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ImageSpriteUrlSet",$param) and $param["ImageSpriteUrlSet"] !== null) {
            $this->ImageSpriteUrlSet = $param["ImageSpriteUrlSet"];
        }

        if (array_key_exists("WebVttUrl",$param) and $param["WebVttUrl"] !== null) {
            $this->WebVttUrl = $param["WebVttUrl"];
        }
    }
}
