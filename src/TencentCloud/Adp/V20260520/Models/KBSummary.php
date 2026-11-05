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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Digest information of the knowledge base
 *
 * @method array getAppList() Obtain <p>List of associated applications. Returned only for shared knowledge base.</p>
 * @method void setAppList(array $AppList) Set <p>List of associated applications. Returned only for shared knowledge base.</p>
 * @method string getCreateTime() Obtain <p>Creation time (Unix seconds).</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time (Unix seconds).</p>
 * @method Operator getCreator() Obtain <p>Creator</p>
 * @method void setCreator(Operator $Creator) Set <p>Creator</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method integer getDocCount() Obtain <p>Number of documents</p>
 * @method void setDocCount(integer $DocCount) Set <p>Number of documents</p>
 * @method boolean getIsExceeded() Obtain <p>Whether it is excessive</p>
 * @method void setIsExceeded(boolean $IsExceeded) Set <p>Whether it is excessive</p>
 * @method string getKbId() Obtain <p>Knowledge base ID</p>
 * @method void setKbId(string $KbId) Set <p>Knowledge base ID</p>
 * @method integer getKbType() Obtain <p>Type: 1=default knowledge base, 2=shared knowledge base<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_TYPE_DEFAULT</td><td>1</td><td>Default knowledge base</td></tr><tr><td>KB_TYPE_SHARED</td><td>2</td><td>Shared knowledge base</td></tr></tbody></table></p>
 * @method void setKbType(integer $KbType) Set <p>Type: 1=default knowledge base, 2=shared knowledge base<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_TYPE_DEFAULT</td><td>1</td><td>Default knowledge base</td></tr><tr><td>KB_TYPE_SHARED</td><td>2</td><td>Shared knowledge base</td></tr></tbody></table></p>
 * @method Operator getLatestOperator() Obtain <p>Last operator. Returned only for shared knowledge bases.</p>
 * @method void setLatestOperator(Operator $LatestOperator) Set <p>Last operator. Returned only for shared knowledge bases.</p>
 * @method string getName() Obtain <p>Knowledge base name.</p>
 * @method void setName(string $Name) Set <p>Knowledge base name.</p>
 * @method KBPermission getPermission() Obtain <p>Operation permission.</p>
 * @method void setPermission(KBPermission $Permission) Set <p>Operation permission.</p>
 * @method array getProcessingFlagList() Obtain <p>List of in-processing statuses</p>
 * @method void setProcessingFlagList(array $ProcessingFlagList) Set <p>List of in-processing statuses</p>
 * @method integer getSharedSubType() Obtain <p>Share sub-type: 1=ordinary, 2=wechat official account<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SHARED_KB_SUB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SHARED_KB_SUB_TYPE_NORMAL</td><td>1</td><td>Ordinary</td></tr><tr><td>SHARED_KB_SUB_TYPE_PUBLIC_ACCOUNT</td><td>2</td><td>WeChat official account</td></tr></tbody></table></p>
 * @method void setSharedSubType(integer $SharedSubType) Set <p>Share sub-type: 1=ordinary, 2=wechat official account<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SHARED_KB_SUB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SHARED_KB_SUB_TYPE_NORMAL</td><td>1</td><td>Ordinary</td></tr><tr><td>SHARED_KB_SUB_TYPE_PUBLIC_ACCOUNT</td><td>2</td><td>WeChat official account</td></tr></tbody></table></p>
 * @method string getUpdateTime() Obtain <p>Update time (Unix seconds)</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time (Unix seconds)</p>
 * @method KBSpaceShare getSpaceShare() Obtain <p>Knowledge base space share information</p>
 * @method void setSpaceShare(KBSpaceShare $SpaceShare) Set <p>Knowledge base space share information</p>
 */
class KBSummary extends AbstractModel
{
    /**
     * @var array <p>List of associated applications. Returned only for shared knowledge base.</p>
     */
    public $AppList;

    /**
     * @var string <p>Creation time (Unix seconds).</p>
     */
    public $CreateTime;

    /**
     * @var Operator <p>Creator</p>
     */
    public $Creator;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var integer <p>Number of documents</p>
     */
    public $DocCount;

    /**
     * @var boolean <p>Whether it is excessive</p>
     */
    public $IsExceeded;

    /**
     * @var string <p>Knowledge base ID</p>
     */
    public $KbId;

    /**
     * @var integer <p>Type: 1=default knowledge base, 2=shared knowledge base<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_TYPE_DEFAULT</td><td>1</td><td>Default knowledge base</td></tr><tr><td>KB_TYPE_SHARED</td><td>2</td><td>Shared knowledge base</td></tr></tbody></table></p>
     */
    public $KbType;

    /**
     * @var Operator <p>Last operator. Returned only for shared knowledge bases.</p>
     */
    public $LatestOperator;

    /**
     * @var string <p>Knowledge base name.</p>
     */
    public $Name;

    /**
     * @var KBPermission <p>Operation permission.</p>
     */
    public $Permission;

    /**
     * @var array <p>List of in-processing statuses</p>
     */
    public $ProcessingFlagList;

    /**
     * @var integer <p>Share sub-type: 1=ordinary, 2=wechat official account<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SHARED_KB_SUB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SHARED_KB_SUB_TYPE_NORMAL</td><td>1</td><td>Ordinary</td></tr><tr><td>SHARED_KB_SUB_TYPE_PUBLIC_ACCOUNT</td><td>2</td><td>WeChat official account</td></tr></tbody></table></p>
     */
    public $SharedSubType;

    /**
     * @var string <p>Update time (Unix seconds)</p>
     */
    public $UpdateTime;

    /**
     * @var KBSpaceShare <p>Knowledge base space share information</p>
     */
    public $SpaceShare;

    /**
     * @param array $AppList <p>List of associated applications. Returned only for shared knowledge base.</p>
     * @param string $CreateTime <p>Creation time (Unix seconds).</p>
     * @param Operator $Creator <p>Creator</p>
     * @param string $Description <p>Description.</p>
     * @param integer $DocCount <p>Number of documents</p>
     * @param boolean $IsExceeded <p>Whether it is excessive</p>
     * @param string $KbId <p>Knowledge base ID</p>
     * @param integer $KbType <p>Type: 1=default knowledge base, 2=shared knowledge base<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_TYPE_DEFAULT</td><td>1</td><td>Default knowledge base</td></tr><tr><td>KB_TYPE_SHARED</td><td>2</td><td>Shared knowledge base</td></tr></tbody></table></p>
     * @param Operator $LatestOperator <p>Last operator. Returned only for shared knowledge bases.</p>
     * @param string $Name <p>Knowledge base name.</p>
     * @param KBPermission $Permission <p>Operation permission.</p>
     * @param array $ProcessingFlagList <p>List of in-processing statuses</p>
     * @param integer $SharedSubType <p>Share sub-type: 1=ordinary, 2=wechat official account<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SHARED_KB_SUB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SHARED_KB_SUB_TYPE_NORMAL</td><td>1</td><td>Ordinary</td></tr><tr><td>SHARED_KB_SUB_TYPE_PUBLIC_ACCOUNT</td><td>2</td><td>WeChat official account</td></tr></tbody></table></p>
     * @param string $UpdateTime <p>Update time (Unix seconds)</p>
     * @param KBSpaceShare $SpaceShare <p>Knowledge base space share information</p>
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
        if (array_key_exists("AppList",$param) and $param["AppList"] !== null) {
            $this->AppList = [];
            foreach ($param["AppList"] as $key => $value){
                $obj = new Identity();
                $obj->deserialize($value);
                array_push($this->AppList, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = new Operator();
            $this->Creator->deserialize($param["Creator"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DocCount",$param) and $param["DocCount"] !== null) {
            $this->DocCount = $param["DocCount"];
        }

        if (array_key_exists("IsExceeded",$param) and $param["IsExceeded"] !== null) {
            $this->IsExceeded = $param["IsExceeded"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("KbType",$param) and $param["KbType"] !== null) {
            $this->KbType = $param["KbType"];
        }

        if (array_key_exists("LatestOperator",$param) and $param["LatestOperator"] !== null) {
            $this->LatestOperator = new Operator();
            $this->LatestOperator->deserialize($param["LatestOperator"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = new KBPermission();
            $this->Permission->deserialize($param["Permission"]);
        }

        if (array_key_exists("ProcessingFlagList",$param) and $param["ProcessingFlagList"] !== null) {
            $this->ProcessingFlagList = $param["ProcessingFlagList"];
        }

        if (array_key_exists("SharedSubType",$param) and $param["SharedSubType"] !== null) {
            $this->SharedSubType = $param["SharedSubType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SpaceShare",$param) and $param["SpaceShare"] !== null) {
            $this->SpaceShare = new KBSpaceShare();
            $this->SpaceShare->deserialize($param["SpaceShare"]);
        }
    }
}
