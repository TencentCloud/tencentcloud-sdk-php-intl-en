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
 * 
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 * @method string getBase64() Obtain 
 * @method void setBase64(string $Base64) Set 
 * @method string getText() Obtain 
 * @method void setText(string $Text) Set 
 * @method string getReferenceType() Obtain 
 * @method void setReferenceType(string $ReferenceType) Set 
 */
class AigcImageTaskInputFileInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @var string 
     */
    public $Base64;

    /**
     * @var string 
     */
    public $Text;

    /**
     * @var string 
     */
    public $ReferenceType;

    /**
     * @param string $Type 
     * @param string $FileId 
     * @param string $Url 
     * @param string $Base64 
     * @param string $Text 
     * @param string $ReferenceType 
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }
    }
}
