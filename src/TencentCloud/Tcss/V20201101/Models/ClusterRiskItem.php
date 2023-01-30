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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * A risk item is a check item with an issue found in the check, with certain information of the check result.
 *
 * @method ClusterCheckItem getCheckItem() Obtain Check item information
 * @method void setCheckItem(ClusterCheckItem $CheckItem) Set Check item information
 * @method string getVerifyInfo() Obtain Verification information
 * @method void setVerifyInfo(string $VerifyInfo) Set Verification information
 * @method string getErrorMessage() Obtain Event description and check error message
 * @method void setErrorMessage(string $ErrorMessage) Set Event description and check error message
 * @method integer getAffectedClusterCount() Obtain Number of affected clusters
 * @method void setAffectedClusterCount(integer $AffectedClusterCount) Set Number of affected clusters
 * @method integer getAffectedNodeCount() Obtain Number of affected nodes
 * @method void setAffectedNodeCount(integer $AffectedNodeCount) Set Number of affected nodes
 */
class ClusterRiskItem extends AbstractModel
{
    /**
     * @var ClusterCheckItem Check item information
     */
    public $CheckItem;

    /**
     * @var string Verification information
     */
    public $VerifyInfo;

    /**
     * @var string Event description and check error message
     */
    public $ErrorMessage;

    /**
     * @var integer Number of affected clusters
     */
    public $AffectedClusterCount;

    /**
     * @var integer Number of affected nodes
     */
    public $AffectedNodeCount;

    /**
     * @param ClusterCheckItem $CheckItem Check item information
     * @param string $VerifyInfo Verification information
     * @param string $ErrorMessage Event description and check error message
     * @param integer $AffectedClusterCount Number of affected clusters
     * @param integer $AffectedNodeCount Number of affected nodes
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
        if (array_key_exists("CheckItem",$param) and $param["CheckItem"] !== null) {
            $this->CheckItem = new ClusterCheckItem();
            $this->CheckItem->deserialize($param["CheckItem"]);
        }

        if (array_key_exists("VerifyInfo",$param) and $param["VerifyInfo"] !== null) {
            $this->VerifyInfo = $param["VerifyInfo"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("AffectedClusterCount",$param) and $param["AffectedClusterCount"] !== null) {
            $this->AffectedClusterCount = $param["AffectedClusterCount"];
        }

        if (array_key_exists("AffectedNodeCount",$param) and $param["AffectedNodeCount"] !== null) {
            $this->AffectedNodeCount = $param["AffectedNodeCount"];
        }
    }
}
