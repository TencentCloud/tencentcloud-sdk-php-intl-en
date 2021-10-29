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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUserSAMLConfig request structure.
 *
 * @method string getOperate() Obtain Type of the modification operation. `enable`: enable, `disable`: disable, `updateSAML`: modify metadata document.
 * @method void setOperate(string $Operate) Set Type of the modification operation. `enable`: enable, `disable`: disable, `updateSAML`: modify metadata document.
 * @method string getSAMLMetadataDocument() Obtain Metadata document, which must be Base64 encoded. This parameter is required only when the value of `Operate` is `updateSAML`.
 * @method void setSAMLMetadataDocument(string $SAMLMetadataDocument) Set Metadata document, which must be Base64 encoded. This parameter is required only when the value of `Operate` is `updateSAML`.
 */
class UpdateUserSAMLConfigRequest extends AbstractModel
{
    /**
     * @var string Type of the modification operation. `enable`: enable, `disable`: disable, `updateSAML`: modify metadata document.
     */
    public $Operate;

    /**
     * @var string Metadata document, which must be Base64 encoded. This parameter is required only when the value of `Operate` is `updateSAML`.
     */
    public $SAMLMetadataDocument;

    /**
     * @param string $Operate Type of the modification operation. `enable`: enable, `disable`: disable, `updateSAML`: modify metadata document.
     * @param string $SAMLMetadataDocument Metadata document, which must be Base64 encoded. This parameter is required only when the value of `Operate` is `updateSAML`.
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
        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("SAMLMetadataDocument",$param) and $param["SAMLMetadataDocument"] !== null) {
            $this->SAMLMetadataDocument = $param["SAMLMetadataDocument"];
        }
    }
}
