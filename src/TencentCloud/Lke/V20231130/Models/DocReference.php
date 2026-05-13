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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getDocBizId() Obtain 
 * @method void setDocBizId(integer $DocBizId) Set 
 * @method integer getReferBizId() Obtain 
 * @method void setReferBizId(integer $ReferBizId) Set 
 * @method string getDocName() Obtain 
 * @method void setDocName(string $DocName) Set 
 * @method integer getKnowledgeBizId() Obtain 
 * @method void setKnowledgeBizId(integer $KnowledgeBizId) Set 
 * @method string getKnowledgeName() Obtain 
 * @method void setKnowledgeName(string $KnowledgeName) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 */
class DocReference extends AbstractModel
{
    /**
     * @var integer 
     */
    public $DocBizId;

    /**
     * @var integer 
     */
    public $ReferBizId;

    /**
     * @var string 
     */
    public $DocName;

    /**
     * @var integer 
     */
    public $KnowledgeBizId;

    /**
     * @var string 
     */
    public $KnowledgeName;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @param integer $DocBizId 
     * @param integer $ReferBizId 
     * @param string $DocName 
     * @param integer $KnowledgeBizId 
     * @param string $KnowledgeName 
     * @param string $Url 
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
        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("ReferBizId",$param) and $param["ReferBizId"] !== null) {
            $this->ReferBizId = $param["ReferBizId"];
        }

        if (array_key_exists("DocName",$param) and $param["DocName"] !== null) {
            $this->DocName = $param["DocName"];
        }

        if (array_key_exists("KnowledgeBizId",$param) and $param["KnowledgeBizId"] !== null) {
            $this->KnowledgeBizId = $param["KnowledgeBizId"];
        }

        if (array_key_exists("KnowledgeName",$param) and $param["KnowledgeName"] !== null) {
            $this->KnowledgeName = $param["KnowledgeName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
