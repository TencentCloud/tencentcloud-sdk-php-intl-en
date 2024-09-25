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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpsertSession request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getSource() Obtain Session source location
 * @method void setSource(string $Source) Set Session source location
 * @method string getCategory() Obtain Extraction category
 * @method void setCategory(string $Category) Set Extraction category
 * @method string getKeyOrStartMat() Obtain Extract key or initial match mode
 * @method void setKeyOrStartMat(string $KeyOrStartMat) Set Extract key or initial match mode
 * @method string getEndMat() Obtain End match mode
 * @method void setEndMat(string $EndMat) Set End match mode
 * @method string getStartOffset() Obtain Start offset position
 * @method void setStartOffset(string $StartOffset) Set Start offset position
 * @method string getEndOffset() Obtain End offset position
 * @method void setEndOffset(string $EndOffset) Set End offset position
 * @method string getEdition() Obtain Version
 * @method void setEdition(string $Edition) Set Version
 * @method string getSessionName() Obtain Session Name
 * @method void setSessionName(string $SessionName) Set Session Name
 * @method integer getSessionID() Obtain ID corresponding to session
 * @method void setSessionID(integer $SessionID) Set ID corresponding to session
 */
class UpsertSessionRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Session source location
     */
    public $Source;

    /**
     * @var string Extraction category
     */
    public $Category;

    /**
     * @var string Extract key or initial match mode
     */
    public $KeyOrStartMat;

    /**
     * @var string End match mode
     */
    public $EndMat;

    /**
     * @var string Start offset position
     */
    public $StartOffset;

    /**
     * @var string End offset position
     */
    public $EndOffset;

    /**
     * @var string Version
     */
    public $Edition;

    /**
     * @var string Session Name
     */
    public $SessionName;

    /**
     * @var integer ID corresponding to session
     */
    public $SessionID;

    /**
     * @param string $Domain Domain name
     * @param string $Source Session source location
     * @param string $Category Extraction category
     * @param string $KeyOrStartMat Extract key or initial match mode
     * @param string $EndMat End match mode
     * @param string $StartOffset Start offset position
     * @param string $EndOffset End offset position
     * @param string $Edition Version
     * @param string $SessionName Session Name
     * @param integer $SessionID ID corresponding to session
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("KeyOrStartMat",$param) and $param["KeyOrStartMat"] !== null) {
            $this->KeyOrStartMat = $param["KeyOrStartMat"];
        }

        if (array_key_exists("EndMat",$param) and $param["EndMat"] !== null) {
            $this->EndMat = $param["EndMat"];
        }

        if (array_key_exists("StartOffset",$param) and $param["StartOffset"] !== null) {
            $this->StartOffset = $param["StartOffset"];
        }

        if (array_key_exists("EndOffset",$param) and $param["EndOffset"] !== null) {
            $this->EndOffset = $param["EndOffset"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
        }
    }
}
