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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAsrHotwords request structure.
 *
 * @method integer getType() Obtain 0: temporary hotword; 1 file-based hotword.
 * @method void setType(integer $Type) Set 0: temporary hotword; 1 file-based hotword.
 * @method string getName() Obtain Hotword lexicon name.
 * @method void setName(string $Name) Set Hotword lexicon name.
 * @method string getContent() Obtain Hotword lexicon text. This field is required if Type is set to 0.
 * @method void setContent(string $Content) Set Hotword lexicon text. This field is required if Type is set to 0.
 * @method string getFileContent() Obtain Base64-encoded content of the hotword file. This field is required if Type is set to 1.


 * @method void setFileContent(string $FileContent) Set Base64-encoded content of the hotword file. This field is required if Type is set to 1.


 * @method string getFileName() Obtain Name of the uploaded file.
 * @method void setFileName(string $FileName) Set Name of the uploaded file.
 */
class CreateAsrHotwordsRequest extends AbstractModel
{
    /**
     * @var integer 0: temporary hotword; 1 file-based hotword.
     */
    public $Type;

    /**
     * @var string Hotword lexicon name.
     */
    public $Name;

    /**
     * @var string Hotword lexicon text. This field is required if Type is set to 0.
     */
    public $Content;

    /**
     * @var string Base64-encoded content of the hotword file. This field is required if Type is set to 1.


     */
    public $FileContent;

    /**
     * @var string Name of the uploaded file.
     */
    public $FileName;

    /**
     * @param integer $Type 0: temporary hotword; 1 file-based hotword.
     * @param string $Name Hotword lexicon name.
     * @param string $Content Hotword lexicon text. This field is required if Type is set to 0.
     * @param string $FileContent Base64-encoded content of the hotword file. This field is required if Type is set to 1.


     * @param string $FileName Name of the uploaded file.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
