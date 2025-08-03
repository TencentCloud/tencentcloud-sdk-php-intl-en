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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyEmbedInterval request structure.
 *
 * @method integer getProjectId() Obtain Shares the project ID. Required.
 * @method void setProjectId(integer $ProjectId) Set Shares the project ID. Required.
 * @method integer getPageId() Obtain Shares the page ID. This field is empty (0) for embedding a dashboard and is not passed for embedding ChatBI.

 * @method void setPageId(integer $PageId) Set Shares the page ID. This field is empty (0) for embedding a dashboard and is not passed for embedding ChatBI.

 * @method string getBIToken() Obtain Token requiring extension.
 * @method void setBIToken(string $BIToken) Set Token requiring extension.
 * @method string getExtraParam() Obtain Alternate field.
 * @method void setExtraParam(string $ExtraParam) Set Alternate field.
 * @method string getIntention() Obtain embed: page/dashboard embedding.
chatBIEmbed: ChatBI embedding.
 * @method void setIntention(string $Intention) Set embed: page/dashboard embedding.
chatBIEmbed: ChatBI embedding.
 * @method string getScope() Obtain panel: dashboard; page: page.
project, during ChatBI embedding.
 * @method void setScope(string $Scope) Set panel: dashboard; page: page.
project, during ChatBI embedding.
 */
class ApplyEmbedIntervalRequest extends AbstractModel
{
    /**
     * @var integer Shares the project ID. Required.
     */
    public $ProjectId;

    /**
     * @var integer Shares the page ID. This field is empty (0) for embedding a dashboard and is not passed for embedding ChatBI.

     */
    public $PageId;

    /**
     * @var string Token requiring extension.
     */
    public $BIToken;

    /**
     * @var string Alternate field.
     */
    public $ExtraParam;

    /**
     * @var string embed: page/dashboard embedding.
chatBIEmbed: ChatBI embedding.
     */
    public $Intention;

    /**
     * @var string panel: dashboard; page: page.
project, during ChatBI embedding.
     */
    public $Scope;

    /**
     * @param integer $ProjectId Shares the project ID. Required.
     * @param integer $PageId Shares the page ID. This field is empty (0) for embedding a dashboard and is not passed for embedding ChatBI.

     * @param string $BIToken Token requiring extension.
     * @param string $ExtraParam Alternate field.
     * @param string $Intention embed: page/dashboard embedding.
chatBIEmbed: ChatBI embedding.
     * @param string $Scope panel: dashboard; page: page.
project, during ChatBI embedding.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("BIToken",$param) and $param["BIToken"] !== null) {
            $this->BIToken = $param["BIToken"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("Intention",$param) and $param["Intention"] !== null) {
            $this->Intention = $param["Intention"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }
    }
}
