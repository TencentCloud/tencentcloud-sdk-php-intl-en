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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SRT FEC advanced configuration
 *
 * @method boolean getEnable() Obtain Whether to enable FEC.
 * @method void setEnable(boolean $Enable) Set Whether to enable FEC.
 * @method integer getCols() Obtain Number of FEC data packet Layout columns. Value range: >0
 * @method void setCols(integer $Cols) Set Number of FEC data packet Layout columns. Value range: >0
 * @method integer getRows() Obtain Number of FEC data packet Layout rows. Value ranges from >=2 or <=-2.
 * @method void setRows(integer $Rows) Set Number of FEC data packet Layout rows. Value ranges from >=2 or <=-2.
 * @method string getARQ() Obtain ARQ policy when FEC is enabled. Value: "always", "onreq", "never".
 * @method void setARQ(string $ARQ) Set ARQ policy when FEC is enabled. Value: "always", "onreq", "never".
 * @method string getLayout() Obtain FEC data packet Layout organization. Value: "even", "staircase"
 * @method void setLayout(string $Layout) Set FEC data packet Layout organization. Value: "even", "staircase"
 */
class SRTFECFullOptions extends AbstractModel
{
    /**
     * @var boolean Whether to enable FEC.
     */
    public $Enable;

    /**
     * @var integer Number of FEC data packet Layout columns. Value range: >0
     */
    public $Cols;

    /**
     * @var integer Number of FEC data packet Layout rows. Value ranges from >=2 or <=-2.
     */
    public $Rows;

    /**
     * @var string ARQ policy when FEC is enabled. Value: "always", "onreq", "never".
     */
    public $ARQ;

    /**
     * @var string FEC data packet Layout organization. Value: "even", "staircase"
     */
    public $Layout;

    /**
     * @param boolean $Enable Whether to enable FEC.
     * @param integer $Cols Number of FEC data packet Layout columns. Value range: >0
     * @param integer $Rows Number of FEC data packet Layout rows. Value ranges from >=2 or <=-2.
     * @param string $ARQ ARQ policy when FEC is enabled. Value: "always", "onreq", "never".
     * @param string $Layout FEC data packet Layout organization. Value: "even", "staircase"
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Cols",$param) and $param["Cols"] !== null) {
            $this->Cols = $param["Cols"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = $param["Rows"];
        }

        if (array_key_exists("ARQ",$param) and $param["ARQ"] !== null) {
            $this->ARQ = $param["ARQ"];
        }

        if (array_key_exists("Layout",$param) and $param["Layout"] !== null) {
            $this->Layout = $param["Layout"];
        }
    }
}
