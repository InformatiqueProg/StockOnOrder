
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- stock_on_order_config
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `stock_on_order_config`;

CREATE TABLE `stock_on_order_config`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `module_id` INTEGER NOT NULL,
    `status_id` INTEGER NOT NULL,
    `behavior` VARCHAR(255) DEFAULT 'default',
    PRIMARY KEY (`id`),
    INDEX `FI_module_id_stock_on_order_config` (`module_id`),
    INDEX `FI_status_id_stock_on_order_config` (`status_id`),
    CONSTRAINT `fk_module_id_stock_on_order_config`
        FOREIGN KEY (`module_id`)
        REFERENCES `module` (`id`)
        ON DELETE CASCADE,
    CONSTRAINT `fk_status_id_stock_on_order_config`
        FOREIGN KEY (`status_id`)
        REFERENCES `order_status` (`id`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- stock_on_order
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `stock_on_order`;

CREATE TABLE `stock_on_order`
(
    `order_id` INTEGER NOT NULL,
    `isStockDecreased` TINYINT(1),
    INDEX `FI_order_id_stock_on_order` (`order_id`),
    CONSTRAINT `fk_order_id_stock_on_order`
        FOREIGN KEY (`order_id`)
        REFERENCES `order` (`id`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;