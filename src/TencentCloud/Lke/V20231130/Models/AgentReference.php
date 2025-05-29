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
 * Reference source in agent.
 *
 * @method string getDocId() Obtain Source document ID.
 * @method void setDocId(string $DocId) Set Source document ID.
 * @method string getId() Obtain ID.
 * @method void setId(string $Id) Set ID.
 * @method string getName() Obtain Name.
 * @method void setName(string $Name) Set Name.
 * @method integer getType() Obtain Type.
 * @method void setType(integer $Type) Set Type.
 * @method string getUrl() Obtain URL.
 * @method void setUrl(string $Url) Set URL.
 * @method string getDocBizId() Obtain Document business ID.
 * @method void setDocBizId(string $DocBizId) Set Document business ID.
 * @method string getDocName() Obtain Document name.
 * @method void setDocName(string $DocName) Set Document name.
 * @method string getQaBizId() Obtain Q&A business ID.
 * @method void setQaBizId(string $QaBizId) Set Q&A business ID.
 * @method integer getIndex() Obtain Index of search engine.
 * @method void setIndex(integer $Index) Set Index of search engine.
 * @method string getTitle() Obtain Title.
 * @method void setTitle(string $Title) Set Title.
 */
class AgentReference extends AbstractModel
{
    /**
     * @var string Source document ID.
     */
    public $DocId;

    /**
     * @var string ID.
     */
    public $Id;

    /**
     * @var string Name.
     */
    public $Name;

    /**
     * @var integer Type.
     */
    public $Type;

    /**
     * @var string URL.
     */
    public $Url;

    /**
     * @var string Document business ID.
     */
    public $DocBizId;

    /**
     * @var string Document name.
     */
    public $DocName;

    /**
     * @var string Q&A business ID.
     */
    public $QaBizId;

    /**
     * @var integer Index of search engine.
     */
    public $Index;

    /**
     * @var string Title.
     */
    public $Title;

    /**
     * @param string $DocId Source document ID.
     * @param string $Id ID.
     * @param string $Name Name.
     * @param integer $Type Type.
     * @param string $Url URL.
     * @param string $DocBizId Document business ID.
     * @param string $DocName Document name.
     * @param string $QaBizId Q&A business ID.
     * @param integer $Index Index of search engine.
     * @param string $Title Title.
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
        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("DocName",$param) and $param["DocName"] !== null) {
            $this->DocName = $param["DocName"];
        }

        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
