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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStorageCredential request structure.
 *
 * @method string getBotBizId() Obtain Application ID. The parameter still needs to be filled in. Different combinations of parameters will result in different permissions. For details, see https://cloud.tencent.com/document/product/1759/116238.
 * @method void setBotBizId(string $BotBizId) Set Application ID. The parameter still needs to be filled in. Different combinations of parameters will result in different permissions. For details, see https://cloud.tencent.com/document/product/1759/116238.
 * @method string getFileType() Obtain File type, normal file name type suffixes, such as xlsx, pdf, docx, png, etc.
 * @method void setFileType(string $FileType) Set File type, normal file name type suffixes, such as xlsx, pdf, docx, png, etc.
 * @method boolean getIsPublic() Obtain This parameter is used to select a scenario when uploading a file or an image. When uploading an image in a chat, "Ispublic" is "true." When uploading a file (including files in the document library, images, etc. and files in a chat), "Ispublic" is "false."

 * @method void setIsPublic(boolean $IsPublic) Set This parameter is used to select a scenario when uploading a file or an image. When uploading an image in a chat, "Ispublic" is "true." When uploading a file (including files in the document library, images, etc. and files in a chat), "Ispublic" is "false."

 * @method string getTypeKey() Obtain Storage type: offline - offline file; realtime - real-time file. If empty, it defaults to offline.
 * @method void setTypeKey(string $TypeKey) Set Storage type: offline - offline file; realtime - real-time file. If empty, it defaults to offline.
 */
class DescribeStorageCredentialRequest extends AbstractModel
{
    /**
     * @var string Application ID. The parameter still needs to be filled in. Different combinations of parameters will result in different permissions. For details, see https://cloud.tencent.com/document/product/1759/116238.
     */
    public $BotBizId;

    /**
     * @var string File type, normal file name type suffixes, such as xlsx, pdf, docx, png, etc.
     */
    public $FileType;

    /**
     * @var boolean This parameter is used to select a scenario when uploading a file or an image. When uploading an image in a chat, "Ispublic" is "true." When uploading a file (including files in the document library, images, etc. and files in a chat), "Ispublic" is "false."

     */
    public $IsPublic;

    /**
     * @var string Storage type: offline - offline file; realtime - real-time file. If empty, it defaults to offline.
     */
    public $TypeKey;

    /**
     * @param string $BotBizId Application ID. The parameter still needs to be filled in. Different combinations of parameters will result in different permissions. For details, see https://cloud.tencent.com/document/product/1759/116238.
     * @param string $FileType File type, normal file name type suffixes, such as xlsx, pdf, docx, png, etc.
     * @param boolean $IsPublic This parameter is used to select a scenario when uploading a file or an image. When uploading an image in a chat, "Ispublic" is "true." When uploading a file (including files in the document library, images, etc. and files in a chat), "Ispublic" is "false."

     * @param string $TypeKey Storage type: offline - offline file; realtime - real-time file. If empty, it defaults to offline.
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("TypeKey",$param) and $param["TypeKey"] !== null) {
            $this->TypeKey = $param["TypeKey"];
        }
    }
}
