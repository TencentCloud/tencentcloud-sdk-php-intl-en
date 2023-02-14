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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Claim protocol type (CPT) rankings by the number of credentials issued.
 *
 * @method string getCptName() Obtain The (claim protocol type) CPT name.
 * @method void setCptName(string $CptName) Set The (claim protocol type) CPT name.
 * @method integer getRank() Obtain The ranking.
 * @method void setRank(integer $Rank) Set The ranking.
 * @method integer getCount() Obtain The number of credentials issued.
 * @method void setCount(integer $Count) Set The number of credentials issued.
 * @method string getApplyName() Obtain The application name.
 * @method void setApplyName(string $ApplyName) Set The application name.
 * @method integer getApplyId() Obtain The application ID.
 * @method void setApplyId(integer $ApplyId) Set The application ID.
 */
class CptIssueRank extends AbstractModel
{
    /**
     * @var string The (claim protocol type) CPT name.
     */
    public $CptName;

    /**
     * @var integer The ranking.
     */
    public $Rank;

    /**
     * @var integer The number of credentials issued.
     */
    public $Count;

    /**
     * @var string The application name.
     */
    public $ApplyName;

    /**
     * @var integer The application ID.
     */
    public $ApplyId;

    /**
     * @param string $CptName The (claim protocol type) CPT name.
     * @param integer $Rank The ranking.
     * @param integer $Count The number of credentials issued.
     * @param string $ApplyName The application name.
     * @param integer $ApplyId The application ID.
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
        if (array_key_exists("CptName",$param) and $param["CptName"] !== null) {
            $this->CptName = $param["CptName"];
        }

        if (array_key_exists("Rank",$param) and $param["Rank"] !== null) {
            $this->Rank = $param["Rank"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ApplyName",$param) and $param["ApplyName"] !== null) {
            $this->ApplyName = $param["ApplyName"];
        }

        if (array_key_exists("ApplyId",$param) and $param["ApplyId"] !== null) {
            $this->ApplyId = $param["ApplyId"];
        }
    }
}
