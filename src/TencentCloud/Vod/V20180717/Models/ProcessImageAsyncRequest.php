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
 * ProcessImageAsync request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
 * @method string getFileId() Obtain <p>FileId that needs image processing. Cannot be used with Url simultaneously.</p>
 * @method void setFileId(string $FileId) Set <p>FileId that needs image processing. Cannot be used with Url simultaneously.</p>
 * @method string getUrl() Obtain <p>Url for image processing. Cannot be used with FileId.</p>
 * @method void setUrl(string $Url) Set <p>Url for image processing. Cannot be used with FileId.</p>
 * @method string getBase64() Obtain <p>The Base64 that needs image processing requires the image file to be less than 4MB. When using Base64, do not add any prefix such as <code>data:image/png;base64,</code>, just provide the Base64 encoded string itself.</p>
 * @method void setBase64(string $Base64) Set <p>The Base64 that needs image processing requires the image file to be less than 4MB. When using Base64, do not add any prefix such as <code>data:image/png;base64,</code>, just provide the Base64 encoded string itself.</p>
 * @method ProcessImageAsyncTaskInput getImageTaskInput() Obtain <p>Image processing parameter.</p>
 * @method void setImageTaskInput(ProcessImageAsyncTaskInput $ImageTaskInput) Set <p>Image processing parameter.</p>
 * @method ProcessImageAsyncOutputConfig getOutputConfig() Obtain <p>Output media file configuration for the image processing task.</p>
 * @method void setOutputConfig(ProcessImageAsyncOutputConfig $OutputConfig) Set <p>Output media file configuration for the image processing task.</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
 * @method string getExtInfo() Obtain <p>Reserved field, used when special purpose.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field, used when special purpose.</p>
 */
class ProcessImageAsyncRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>FileId that needs image processing. Cannot be used with Url simultaneously.</p>
     */
    public $FileId;

    /**
     * @var string <p>Url for image processing. Cannot be used with FileId.</p>
     */
    public $Url;

    /**
     * @var string <p>The Base64 that needs image processing requires the image file to be less than 4MB. When using Base64, do not add any prefix such as <code>data:image/png;base64,</code>, just provide the Base64 encoded string itself.</p>
     */
    public $Base64;

    /**
     * @var ProcessImageAsyncTaskInput <p>Image processing parameter.</p>
     */
    public $ImageTaskInput;

    /**
     * @var ProcessImageAsyncOutputConfig <p>Output media file configuration for the image processing task.</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>Reserved field, used when special purpose.</p>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
     * @param string $FileId <p>FileId that needs image processing. Cannot be used with Url simultaneously.</p>
     * @param string $Url <p>Url for image processing. Cannot be used with FileId.</p>
     * @param string $Base64 <p>The Base64 that needs image processing requires the image file to be less than 4MB. When using Base64, do not add any prefix such as <code>data:image/png;base64,</code>, just provide the Base64 encoded string itself.</p>
     * @param ProcessImageAsyncTaskInput $ImageTaskInput <p>Image processing parameter.</p>
     * @param ProcessImageAsyncOutputConfig $OutputConfig <p>Output media file configuration for the image processing task.</p>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
     * @param string $ExtInfo <p>Reserved field, used when special purpose.</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Base64",$param) and $param["Base64"] !== null) {
            $this->Base64 = $param["Base64"];
        }

        if (array_key_exists("ImageTaskInput",$param) and $param["ImageTaskInput"] !== null) {
            $this->ImageTaskInput = new ProcessImageAsyncTaskInput();
            $this->ImageTaskInput->deserialize($param["ImageTaskInput"]);
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new ProcessImageAsyncOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
